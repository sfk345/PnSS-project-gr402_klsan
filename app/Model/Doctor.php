<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'Name',
       'Surname',
       'Password'
   ];

   protected static function booted()
   {
       static::created(function ($user) {
           $doctor->Password = md5($doctor->Password);
           $doctor->save();
       });
   }
}
