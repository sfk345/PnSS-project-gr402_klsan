<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post">
       <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>">
       <label>Имя <input type="text" name="Name"></label>
       <label>Пароль <input type="password" name="Password"></label>
       <button>Войти</button>
   </form>
<?php endif;?>
<style>
h2{
   margin-top: 30px;
   font-family: sans-serif;
   font-weight: 750;
   color: #6c0000;
}
form{
   display: flex;
   flex-direction: column;
   gap: 15px;
   /*padding: 30px 0;*/
   background: antiquewhite;
   padding: 40px;
   margin-top: 30px;
   border-radius: 15px;
   font-family: sans-serif;
   font-weight: 750;
   color: #6c0000;
   box-shadow: 0 5px 20px black;
}
input{
   display: flex;
   justify-content: space-evenly;
   border: none;
   border-bottom: 3px solid;
   width: 400px;
   background: none;
   outline: none;
}
button{
   font-family: sans-serif;
   font-weight: 750;
   padding: 10px 0;
   border-radius: 10px;
   border: none;
   background: #6c0000;
   color: #fff;
}
</style>
