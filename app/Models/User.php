<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; // Importe a classe Authenticatable

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users_tb';
    protected $primaryKey = 'user_id';

    public $timestamps = false;

    protected $fillable = [
            'email',
            'password',
            'user_status',
            'token',
            'number',
            'updated',
            'created'
    ];


    public function attempt($credentials)
    {
        $user = static::where(function ($query) use ($credentials) {
            $query->where('email', $credentials['user'])
                  ->orWhere('number', $credentials['user']);
        })->first();

        if (!$user)
        {
            return false;
        }
        return Hash::check($credentials['password'], $user->password);
    }



    public function people()
    {
        return $this->belongsTo(People::class, 'personal_id','user_id');
    }

    public function warning()
    {
        return $this->belongsTo(Warning::class, 'warning_id','user_id');
    }



}
