<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankdata extends Model
{
    protected $table = 'bankdatas';
    protected $primaryKey = 'iban';

    protected $fillable = [
            'owner_name',
            'account_number',
            'personal_id',
            'updated',
            'created'
    ];
}
