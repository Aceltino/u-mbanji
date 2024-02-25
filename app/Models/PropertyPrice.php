<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPrice extends Model
{
    protected $table = 'property_prices';
    protected $primaryKey = 'price_id';

    protected $fillable = [
            'time',
            'price',
            'contract',
            'unity_time',
            'property_id',
            'updated',
            'created'
    ];
}
