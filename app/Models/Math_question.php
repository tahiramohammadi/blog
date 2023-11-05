<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Math_question extends Model
{
    use HasFactory;
    Protected $table="math_question";
    Protected $fillable=[
        'question',
        'catagory_id'
        
         
    ];
    public function catagory(){
        return $this->hasMany(catagory::class,'id','catagory_id');
      }

}

