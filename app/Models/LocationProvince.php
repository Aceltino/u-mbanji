<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationProvince extends Model
{
    protected $table = 'location_province';
    protected $primaryKey = 'province_id';

    protected $fillable = [
            'province'
    ];
}
