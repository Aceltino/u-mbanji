<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankdata extends Model
{
    protected $table = 'bankdatas';
    protected $primaryKey = 'iban_id';
    public $timestamps = false;

    protected $fillable = [
            'iban',
            'owner_name',
            'account_number',
            'personal_id',
            "status",
            'updated',
            'created'
    ];
}
