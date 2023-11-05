<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Math_answer extends Model
{
    use HasFactory;
    Protected $table="math_answers";
    Protected $fillable=[
        'question_id',
        'option_a_id',
        'option_b_id',
        'option_c_id',
        'option_d_id',
        'user_id'
        
         
    ];
    public function math_question(){
        return $this->hasMany(Math_question::class,'id','question_id');
      }
    

}