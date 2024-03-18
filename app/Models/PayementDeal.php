<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayementDeal extends Model
{
    protected $table = 'payment_deal';
    protected $primaryKey = 'payment_id';
    public $timestamps = false;

    protected $fillable = [
            'payment_pdf',
            'payment_status',
            'deal_id',
            'updated',
            'created'
    ];
}
