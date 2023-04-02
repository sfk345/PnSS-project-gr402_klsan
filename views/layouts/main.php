<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>
</head>
<body>
<header>
   <nav>
       <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       <?php
       if (!app()->auth::check()):
           ?>
           <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
           <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
       <?php else:?>
           <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->Name ?>)</a>
       <?php
       endif;
       ?>

       <?php
       if (app()->auth::idPost() == 1):
           ?>
           <a href="<?= app()->route->getUrl('/addUser') ?>">Добавление пользователя</a>
           <a href="<?= app()->route->getUrl('/admission') ?>">Просмотр записей</a>
           <a href="<?= app()->route->getUrl('/patient') ?>">Просмотр пациентов</a>
       <?php endif;?>

       <?php
       if (app()->auth::idPost() == 2):
            ?>
            <a href="<?= app()->route->getUrl('/addAdmission') ?>">Запись на прием</a>
            <a href="<?= app()->route->getUrl('/addPatient') ?>">Добавление пациента</a>
            <a href="<?= app()->route->getUrl('/admission') ?>">Просмотр записей</a>
       <?php endif;?>
       <?php
       if (app()->auth::idPost() == 3):
       ?>
           <a href="<?= app()->route->getUrl('/user') ?>">Личный кабинет доктора</a>
       <?php endif;?>


   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
<style>
    *{
        margin: 0;
    }
    nav{
        display: flex;
        justify-content: center;
        background: antiquewhite;
        padding: 15px;
        gap: 15em;
    }
</style>