<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{

    protected $table = 'warnings';
    protected $primaryKey = 'warning_id';
    public $timestamps = false;

    protected $fillable = [
            'warning',
            'user_id',
            'created'
    ];


    public function user()
    {
        return $this->hasMany(User::class, 'user_id','warning_id');
    }


}
