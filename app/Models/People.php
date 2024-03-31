<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $table = 'people';
    protected $primaryKey = 'personal_id';

    public $timestamps = false;

    protected $fillable = [
            'full_name',
            'bi_number',
            'level_access',
            'user_photo',
            'user_id',
            'updated',
            'created'
    ];

    public function phone()
    {
        return $this->hasOne(PeopleNumber::class, 'number_id', 'personal_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'personal_id');
    }

    public function userOne()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
