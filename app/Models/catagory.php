<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
    Protected $table="catagory";
    Protected $fillable=[
        'catagory',
         
    ];
}