<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class User extends Model implements IdentityInterface
{
   use HasFactory;

   public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
       'img',
       'Name',
       'Surname',
       'Patronymic',
       'Date_of_birth',
       'Gender',
       'ID_post',
       'Password'
   ];

   protected static function booted()
   {
       static::created(function ($user) {
           $user->Password = md5($user->Password);
           $user->save();
       });
   }

    public function findIdentity(int $id)
    {
        return self::where('id', $id)->first();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function attemptIdentity(array $credentials)
    {
        return self::where(['Name' => $credentials['Name'],
            'Password' => md5($credentials['Password'])])->first();
    }
}

