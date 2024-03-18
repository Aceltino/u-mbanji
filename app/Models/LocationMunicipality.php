<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationMunicipality extends Model
{
    protected $table = 'location_municipality';
    protected $primaryKey = 'municipality_id';
    public $timestamps = false;

    protected $fillable = [
            'municipality',
            'province_id',
    ];
}
