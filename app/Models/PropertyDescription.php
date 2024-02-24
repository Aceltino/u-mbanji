<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDescription extends Model
{
    protected $table = 'property_descriptions';
    protected $primaryKey = 'description_id';

    protected $fillable = [
            'description',
            'type_description',
            'property_id',
            'updated',
            'created'
    ];
}
