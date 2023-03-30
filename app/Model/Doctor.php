<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class Doctor extends Model implements IdentityInterface
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

    public function findIdentity(int $ID_doctor)
    {
        return self::where('ID_doctor', $ID_doctor)->first();
    }

    public function getId(): int
    {
        return $this->ID_doctor;
    }

    public function attemptIdentity(array $credentials)
    {
        return self::where(['Name' => $credentials['Name'],
            'Password' => md5($credentials['Password'])])->first();
    }
}

