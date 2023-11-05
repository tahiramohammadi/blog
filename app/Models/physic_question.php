<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class physic_question extends Model
{
    use HasFactory;
    Protected $table="physic_question";
    Protected $fillable=[
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'is_correct',
        'catagory_id'
        
         
    ];
    public function catagory(){
        return $this->hasMany(catagory::class,'id','catagory_id');
      }


}
