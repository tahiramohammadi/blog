<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Math_option extends Model
{
    use HasFactory;
    Protected $table="math_options";
    Protected $fillable=[
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'is_correct',
        'question_id'
        
         
    ];
    public function math_question(){
        return $this->hasMany(Math_question::class,'id','question_id');
      }

}