<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'email',
        'address',
        'contact_number',
        'password'
    ];
}
