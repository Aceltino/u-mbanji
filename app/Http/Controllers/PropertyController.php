<?php

namespace App\Http\Controllers;

use App\Models\Property; //Model
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public static function store($datas)
    {
        $created = Property::create($datas);
        return $created;
    }

    public static function update($datas): bool
    {
        $user = Property::find($datas['property_id']);

        foreach ($datas as $key => $value) {
            $user->$key = $value;
        }
        return $user->save();
    }

    public static function rules()
    {
        $rules =
            [
                'property_type' => 'required|integer',
                'property_location' => 'required|string',
                'property_description' => 'nullable|string',
                'property_bedRoom' => 'integer',
                'property_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024',
                'property_proof' => 'nullable|image|image|mimes:jpeg,png,jpg,svg|max:1024',
                'municipality_id' => 'required|int',
            ];

        $errors = [
            '*.required' => 'Este campo deve ser preenchido',
            '*.integer' => 'Valor inválido',
            '*.string' => 'Valor inválido',
            '*.image' => 'Este campo deve ser uma imagem',
            '*.max' => 'A imagem não deve ter mais de 1 megaByte'
        ];

        return [$rules, $errors];
    }

    public static function getById($datas)
    {
        $found = Property::find($datas);
        return $found;
    }

    public function getPropertiesHome() //Home page 8
    {
        $foundProperties = [];
        $properties = Property::with('priceProperty')
            ->where('property_status', 1)
            ->take(4)->get();
        foreach ($properties as $property) {
            // Recuperar a URL da imagem da propriedade
            $imgProperty = Storage::disk('public')->url($property->property_img);

            // Recuperar o nome da província da propriedade
            $province = LocationProvinceController::get($property->municipality->province_id);

            // Recuperar o nome do município da propriedade
            $municipio = $property->municipality->municipality;

            // Recuperar a localização da propriedade
            $location = $property->property_location;

            // Recuperar o preço mais baixo associado à propriedade
            $lowestPrice = $property->priceProperty()->min('price');

            // Adicionar os detalhes da propriedade ao array de propriedades encontradas
            $foundProperties[] = [
                "imgProperty" => $imgProperty,
                "province" => $province->province,
                "municipio" => $municipio,
                "location" => $location,
                "lowestPrice" => FunctionsController::formatarKwanza($lowestPrice),
                "propertyID" => $property->property_id
            ];
        }

        return response()->json($foundProperties);
    }

    public function getProperty(Request $request)
    {
        $id = $request->id;
        $errors = [];
        $images = [];
        $descriptions = [];
        $prices = [];
        $phones = [];


        $propertyImgs = PropertyImgController::getImgs($id);

        if ($propertyImgs->isEmpty()) {
            $errors[0]['img'] = "No images";
            goto description;
        }

        foreach ($propertyImgs as $image) {
            $img = Storage::disk('public')->url($image->img_file);
            $images[] =
                [
                    "img" => $img,
                    "imgId" => $image->image_id
                ];
        }

        description:
        $propertyDescs = PropertyDescController::getDescs($id);

        if ($propertyDescs->isEmpty()) {
            $errors[0]['desc'] = "No Desc";
            goto price;
        }

        foreach ($propertyDescs as $desc) {
            $descriptions[] =
                [
                    "desc" => $desc->description,
                    "descType" => $desc->type_description
                ];
        }

        price:
        $propertyPrices = PropertyPriceController::getPrices($id);

        if ($propertyPrices->isEmpty()) {
            $errors[0]['price'] = "No Price";
            goto next;
        }

        foreach ($propertyPrices as $price) {
            $prices[] =
                [
                    "time" => $price->time,
                    "price" => FunctionsController::formatarKwanza($price->price),
                    "contract" => $price->contract,
                    "unity_time" => $price->unity_time,
                ];
        }

        next:


        $property = self::getById($id);


        $personalPhones = NumberController::getPhoneNumber($property->personal_id);

        if ($personalPhones->isEmpty()) {
            $errors[0]['phone'] = "No Price";
            goto next;
        }

        foreach ($personalPhones as $phone) {
            $phones[] =
                [
                    "number" => $phone->number
                ];
        }

        $provinceProperty = LocationProvinceController::get($property->municipality->province);
        $municipeProperty = $property->municipality->municipality;
        $imgProperty = Storage::disk('public')->url($property->property_img);
        $imgProof = Storage::disk('public')->url($property->property_proof);


        $propertyInfo =
            [
                "property_type" => $property->property_type,
                "property_location" => $property->property_location,
                "property_description" => $property->property_description ?? '',
                "property_bedRoom" => $property->property_bedRoom ?? '',
                "property_img" => $imgProperty,
                "property_proof" => $imgProof  ?? '',
                "posted" => FunctionsController::formatarData($property->created),
                "municipe" => $municipeProperty,
                "province" => $provinceProperty[0]['province'],
                "proprietary_name" => $property->personal->full_name,
                "proprietary_bi" => $property->personal->bi_number,
                "proprietary_created" => $property->personal->created,
                "proprietary_name" => $property->personal->full_name,
                "proprietary_id" => $property->personal_id,
                "proprietary_email" => $property->personal->userOne->email,
                "propr_img" => $property->personal->user_photo,
                "proprietary_phones" => $phones ?? '',
                "images" => $images,
                "descriptions" => $descriptions,
                "prices" => $prices,
            ];

        return APIResponseController::successWithWarnings($errors, $propertyInfo);
    }

    public function getProperties(Request $request)
    {
        $page = $request->page ?? 1;

        $properties = Property::with('priceProperty')
            ->where('property_status', 1)
            ->paginate(4, ['*'], 'page', $page);

        $foundProperties = [];

        foreach ($properties as $property) {
            // Recuperar a URL da imagem da propriedade
            $imgProperty = Storage::disk('public')->url($property->property_img);

            // Recuperar o nome da província da propriedade
            $province = LocationProvinceController::get($property->municipality->province_id);

            // Recuperar o nome do município da propriedade
            $municipio = $property->municipality->municipality;

            // Recuperar a localização da propriedade
            $location = $property->property_location;

            // Recuperar o preço mais baixo associado à propriedade
            $lowestPrice = $property->priceProperty()->min('price');

            // Adicionar os detalhes da propriedade ao array de propriedades encontradas
            $foundProperties[] = [
                "imgProperty" => $imgProperty,
                "province" => $province->province,
                "municipio" => $municipio,
                "location" => $location,
                "lowestPrice" => $lowestPrice,
                "propertyID" => $property->property_id
            ];
        }

        return response()->json([
            'properties' => $foundProperties,
            'pagination' => [
                'total' => $properties->total(),
                'per_page' => $properties->perPage(),
                'current_page' => $properties->currentPage(),
                'last_page' => $properties->lastPage(),
                'from' => $properties->firstItem(),
                'to' => $properties->lastItem()
            ]
        ]);
    }

    public function getFilteredProperties(Request $request)
    {
        $query = Property::with('priceProperty', 'municipality');

        if ($request->has('contract') && $request->contract !== null ) {
            $query->whereHas('priceProperty', function ($query) use ($request) {
                $query->where('contract', $request->contract);
            });
        }

        if ($request->has('property_type') && $request->property_type !== null ) {
            $query->where('property_type', $request->property_type);
        }

        if ($request->has('province') && $request->province !== null ) {
            $query->whereHas('municipality', function ($query) use ($request) {
                $query->where('province_id', $request->province);
            });
        }

        if ($request->has('municipality') && $request->municipality !== null ) {
            $query->whereHas('municipality', function ($query) use ($request) {
                $query->where('municipality_id', $request->municipality);
            });
        }

        if ($request->has('price') && $request->price !== null ) {
            $query->whereHas('priceProperty', function ($query) use ($request) {
                $query->where('price', '<=', $request->price);
            });
        }

        if ($request->has('property_bedRoom') && $request->property_bedRoom !== null ) {
            $query->where('property_bedRoom', '>=', $request->property_bedRoom);
        }

        if ($request->has('unity_time') && $request->unity_time !== null ) {
            $query->whereHas('priceProperty', function ($query) use ($request) {
                $query->where('unity_time', '<=', $request->unity_time);
            });
        }


        // Paginar os resultados com base na página recebida
        $page = $request->input('page', 1);
        $perPage = 4; // Número de registros por página
        $query->paginate($perPage, ['*'], 'page', $page);

        $records = $query->paginate($perPage);
        if ($records->isEmpty()) {
            return APIResponseController::error(409, 'Sem resultado para esta filtragem!');
        }

        $foundProperties = [];

        foreach ($records as $property) {
            // Recuperar a URL da imagem da propriedade
            $imgProperty = Storage::disk('public')->url($property->property_img);

            // Recuperar o nome da província da propriedade
            $province = LocationProvinceController::get($property->municipality->province_id);

            // Recuperar o nome do município da propriedade
            $municipio = $property->municipality->municipality;

            // Recuperar a localização da propriedade
            $location = $property->property_location;

            // Recuperar o preço mais baixo associado à propriedade
            $lowestPrice = $property->priceProperty()->min('price');

            // Adicionar os detalhes da propriedade ao array de propriedades encontradas
            $foundProperties[] = [
                "imgProperty" => $imgProperty,
                "province" => $province->province,
                "municipio" => $municipio,
                "location" => $location,
                "lowestPrice" => $lowestPrice,
                "propertyID" => $property->property_id
            ];
        }

        $return = [
            'properties' => $foundProperties,
            'pagination' => [
                'total' => $records->total(),
                'per_page' => $records->perPage(),
                'current_page' => $records->currentPage(),
                'last_page' => $records->lastPage(),
                'from' => $records->firstItem(),
                'to' => $records->lastItem(),
            ]
        ];

        return response()->json($return);
    }

    public function getAllPersonalProperties(Request $request) //Home page 8
    {
        $foundProperties = [];
        $properties = Property::with('priceProperty')
            ->where('personal_id', $request->id)
            ->paginate(10);

        if ($properties->isEmpty()) {
            return APIResponseController::error(409, 'Usuário sem propriedades registradas!');
        }

        foreach ($properties as $property) {
            // Recuperar a URL da imagem da propriedade
            $imgProperty = Storage::disk('public')->url($property->property_img);

            // Recuperar o nome da província da propriedade
            $province = LocationProvinceController::get($property->municipality->province_id);

            // Recuperar o nome do município da propriedade
            $municipio = $property->municipality->municipality;

            // Recuperar a localização da propriedade
            $location = $property->property_location;

            // Recuperar o preço mais baixo associado à propriedade
            $lowestPrice = $property->priceProperty()->min('price');

            // Adicionar os detalhes da propriedade ao array de propriedades encontradas
            $foundProperties[] = [
                "imgProperty" => $imgProperty,
                "province" => $province->province,
                "municipio" => $municipio,
                "location" => $location,
                "lowestPrice" => $lowestPrice,
                "propertyID" => $property->property_id
            ];
        }
        $return = [
            'properties' => $foundProperties,
            'pagination' => [
                'total' => $properties->total(),
                'per_page' => $properties->perPage(),
                'current_page' => $properties->currentPage(),
                'last_page' => $properties->lastPage(),
                'from' => $properties->firstItem(),
                'to' => $properties->lastItem(),
            ]
        ];

        return response()->json($return);
    }
}
