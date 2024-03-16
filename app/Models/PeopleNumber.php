<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleNumber extends Model
{
    protected $table = 'people_numbers';
    protected $primaryKey = 'number_id';

    public $timestamps = false;

    protected $fillable = [
            'number',
            'personal_id',
            'updated',
            'created'
    ];
}
