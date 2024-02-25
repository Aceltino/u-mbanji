<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsInfo extends Model
{
    protected $table = 'contacts_info';
    protected $primaryKey = 'contact_id';

    protected $fillable = [
            'topic_contact',
            'content_contact',
            'email_contact',
            'phone_number',
            'personal_id',
            'updated',
            'created'
    ];
}
