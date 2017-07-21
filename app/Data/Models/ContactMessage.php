<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class ContactMessage extends Eloquent
{
	protected $table = 'contact_messages';

	protected $fillable = [
        'name',
        'email',
        'telephone',
        'subject',
        'message',
        'ip_address',
    ];
}
