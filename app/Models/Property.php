<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'property_id';
    public $timestamps = false;

    protected $fillable = [
            'property_type',
            'property_location',
            'property_description',
            'property_status',
            'property_bedRoom',
            'property_img',
            'property_proof',
            'personal_id',
            'municipality_id',
            'updated',
            'created'
    ];

    public function priceProperty()
    {
        return $this->hasOne(PropertyPrice::class, 'property_id', 'property_id');
    }

    public function municipality()
    {
        return $this->belongsTo(LocationMunicipality::class, 'municipality_id');
    }

    public function personal()
    {
        return $this->belongsTo(People::class, 'personal_id');
    }
}
