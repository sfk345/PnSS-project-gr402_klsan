<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'Surname',
       'Name',
       'Patronymic',
       'Date of birth',
       'Gender',
       'ID_post',
       'Specialisation',
       'Password',
   ];

   protected static function booted()
   {
       static::created(function ($doctor) {
           $doctor->Password = md5($doctor->Password);
           $doctor->save();
       });
   }
}
