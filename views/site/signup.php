<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label>Имя <input type="text" name="Name"></label>
   <label>Фамилия <input type="text" name="Surname"></label>
   <label>Пароль <input type="password" name="Password"></label>
   <button>Добавить</button>
</form>
