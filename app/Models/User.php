<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    public $timestamps = false;

    protected $fillable = [
            'username',
            'email',
            'password',
            'user_status',
            'remeber_token',
            'updated',
            'created'
    ];


    public function people(): BelongsTo
    {
        return $this->belongsTo(People::class, 'personal_id','user_id');
    }

    public function warning(): BelongsTo
    {
        return $this->belongsTo(Warning::class, 'warning_id','user_id');
    }



}
