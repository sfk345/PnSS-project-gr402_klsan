<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label>Фамилия <input type="text" name="Surname"></label>
   <label>Имя <input type="text" name="Name"></label>
   <label>Отчество <input type="text" name="Patronymic"></label>
   <label>Дата рождения <input type="date" name="Date_of_birth"></label>
   <label>Пол <input type="text" name="Gender"></label>
   <label>Должность <input type="text" name="ID_post"></label>
   <label>Специализация <input type="text" name="Specialisation"></label>
   <label>Пароль <input type="password" name="Password"></label>
   <label>Роль <input type="text" name="Role_id"></label>
   <button>Добавить</button>
</form>
