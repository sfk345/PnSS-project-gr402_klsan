<?php

namespace Src\Auth;

use Src\Session;

class Auth
{
   //Свойство для хранения любого класса, реализующего интерфейс IdentityInterface
   private static IdentityInterface $doctor;

   //Инициализация класса пользователя
   public static function init(IdentityInterface $doctor): void
   {
       self::$doctor = $doctor;
       if (self::doctor()) {
           self::Name(self::doctor());
       }
   }

   //Вход пользователя по модели
   public static function Name(IdentityInterface $doctor): void
   {
       self::$doctor = $doctor;
       Session::set('ID_doctor', self::$doctor->getId());
   }

   //Аутентификация пользователя и вход по учетным данным
   public static function attempt(array $credentials): bool
   {
       if ($doctor = self::$doctor->attemptIdentity($credentials)) {
           self::Name($doctor);
           return true;
       }
       return false;
   }

   //Возврат текущего аутентифицированного пользователя
   public static function doctor()
   {
       $id = Session::get('ID_doctor') ?? 0;
       return self::$doctor->findIdentity($id);
   }

   //Проверка является ли текущий пользователь аутентифицированным
   public static function check(): bool
   {
       if (self::doctor()) {
           return true;
       }
       return false;
   }

   //Выход текущего пользователя
   public static function logout(): bool
   {
       Session::clear('ID_doctor');
       return true;
   }

}
