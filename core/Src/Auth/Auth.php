<?php

namespace Src\Auth;


use function Session\sessions;

class Auth
{
   //Свойство для хранения любого класса, реализующего интерфейс IdentityInterface
   private static IdentityInterface $user;

   //Инициализация класса пользователя
   public static function init(IdentityInterface $user): void
   {
       self::$user = $user;
       if (self::user()) {
           self::Name(self::user());
       }
   }

   //Вход пользователя по модели
   public static function Name(IdentityInterface $user): void
   {
       self::$user = $user;
       sessions()->set('id', self::$user->getId());
   }

   //Аутентификация пользователя и вход по учетным данным
   public static function attempt(array $credentials): bool
   {
       if ($user = self::$user->attemptIdentity($credentials)) {
           self::Name($user);
           return true;
       }
       return false;
   }

   //Возврат текущего аутентифицированного пользователя
   public static function user()
   {
       $id = sessions()->get('id') ?? 0;
       return self::$user->findIdentity($id);
   }

   public static function idPost()
   {
       return self::$user->ID_post ?? 0;
   }

   //Проверка является ли текущий пользователь аутентифицированным
   public static function check(): bool
   {
       if (self::user()) {
           return true;
       }
       return false;
   }

    //Генерация нового токена для CSRF
    public static function generateCSRF(): string
    {
        $token = md5(time());
        sessions()->set('csrf_token', $token);
        return $token;
    }



    //Выход текущего пользователя
   public static function logout(): bool
   {
       sessions()->clear('id');
       return true;
   }

}
