<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function logar(Request $request)
    {
        if ($request->user == null || $request->password == null) {
            return APIResponseController::error(401, 'Preencha o formulário!');
        }

        $credentials = $request->only('user', 'password');

        $user = User::where(function ($query) use ($credentials) {
            $query->where('email', $credentials['user'])
                ->orWhere('number', $credentials['user']);
        })->first();

        if (!$user) {
            return APIResponseController::error(401, 'Credenciais erradas!');
        }

        if ($user->attempt($credentials)) {

            if ($user->user_status == 0) {
                return APIResponseController::error(401, 'Acesso negado, deixe um email no nosso correio!');
            }

            Auth::loginUsingId($user->user_id);

            $user->tokens()->delete();
            $token = $user->createToken("myDevice")->plainTextToken;
            $user->update(['token' => $token]);

            $people = PeopleController::getPersonalId();

            $img = asset('storage/' . $people->user_photo);
            $phones = NumberController::getPhoneNumber($people->personal_id);
            foreach($phones as $phone)
            {
                $phoneNumber[] = $phone->number;
            }
            $personalData =
                [
                    "name" => $people->full_name,
                    "level_access" => $people->level_access,
                    "personal_id" => $people->personal_id,
                    "img" => $img ?? [],
                    "phone" => $phoneNumber
                ];
            return response()->json([
                'error' => false,
                'message' => 'Login bem-sucedido',
                'userData' => $personalData, // inclua os dados do usuário aqui
                'token' => $token, // inclua os dados do usuário aqui
            ], 200)->withCookie(Cookie::make('utilizador', json_encode($user)));
        } else {
            return APIResponseController::error(401, 'Credenciais erradas!');
        }
    }

    public function deslogar()
    {
        // return dd(Auth::id());
        if (!Auth::check()) {
            goto logout;
        }

        $user = Auth::user();
        $user->tokens()->delete();
        Auth::shouldReceive('check')->andReturn(false);

        logout:
        return APIResponseController::success();
    }
}
