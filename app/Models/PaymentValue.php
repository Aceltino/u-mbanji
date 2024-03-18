<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentValue extends Model
{
    protected $table = 'payment_value';
    protected $primaryKey = 'contract_id';
    public $timestamps = false;

    protected $fillable = [
            'contract',
            'unity_time',
            'percentage',
    ];
}
