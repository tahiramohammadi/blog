<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    Protected $table="users";
    Protected $fillable=[
        'name',
        'email',
        'password',
        'image',
    ];
}
