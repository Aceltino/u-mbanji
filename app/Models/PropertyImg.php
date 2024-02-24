<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImg extends Model
{
    protected $table = 'property_img';
    protected $primaryKey = 'image_id';

    protected $fillable = [
            'img_file',
            'property_id',
    ];
}
