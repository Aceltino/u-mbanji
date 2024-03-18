<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    protected $table = 'user_notification';
    protected $primaryKey = 'userNotification_id';
    public $timestamps = false;

    protected $fillable = [
            'notification_status',
            'personal_id',
            'notification_id',
    ];
}
