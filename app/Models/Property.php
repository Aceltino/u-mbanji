<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'property_id';

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
}
