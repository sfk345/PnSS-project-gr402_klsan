<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post" enctype="multipart/form-data">
   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>">
   <label>Аватар <input type="file" name="img"></label>
   <label>Имя <input type="text" name="Name"></label>
   <label>Фамилия <input type="text" name="Surname"></label>
   <label>Отчество <input type="text" name="Patronymic"></label>
   <label>Дата рождения <input type="date" name="Date_of_birth"></label>
   <label>Пол
      <select name="Gender">
         <option value="Ж">Ж</option>
         <option value="М">М</option>
      </select>
   </label>
   <label>Должность
      <select name="ID_post">
         <option value="1">Админ</option>
         <option value="2">Регистратура</option>
         <option value="3">Доктор</option>
      </select>
   </label>
   <label>Пароль <input type="password" name="Password"></label>
   <button>Добавить</button>
</form>
<style>
   select{
      border: none;
      background: none;
      outline: none;
   }
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
