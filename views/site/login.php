<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->doctor()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post">
       <label>Имя <input type="text" name="Name"></label>
       <label>Пароль <input type="password" name="Password"></label>
       <button>Войти</button>
   </form>
<?php endif;