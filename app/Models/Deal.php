<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $table = 'deals';
    protected $primaryKey = 'deal_id';

    protected $fillable = [
            'datetime_in',
            'datetime_out',
            'payment_status',
            'deal_status',
            'proprietary_id',
            'client_id',
            'payment',
            'property_id',
            'created'
    ];
}
