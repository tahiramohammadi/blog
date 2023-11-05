<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    Protected $table="exam";
    Protected $fillable=[
        'exam_name',
        'catagory_id',
        'duration',
        'date'
       
    ];
      public function catagory(){
        return $this->hasMany(catagory::class,'id','catagory_id');
      }
}
