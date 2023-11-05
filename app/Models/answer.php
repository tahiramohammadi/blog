<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    use HasFactory;
    Protected $table="answers";
    Protected $fillable=[
        'question_id',
        'answer',
        'is_correct'
         
    ];

}
