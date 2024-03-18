<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImg extends Model
{
    protected $table = 'property_imgs';
    protected $primaryKey = 'image_id';
    public $timestamps = false;

    protected $fillable = [
            'img_file',
            'property_id',
    ];
}
