<div class="fut-admissions">
    <h2>Запиь на прием</h2>
    <div class="add-patient">
        <form method="post">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>">
            <label>Пациент<br>
                <select name="ID_patient">
                    <option>Выбор пациента</option>
                    <?php foreach ($patients as $patient){
                        echo '<option value="' .$patient->id. '">' . $patient->Surname . ' '
                            . mb_substr($patient->Name, 0, 1, 'UTF-8') . '. '
                            . mb_substr($patient->Patronymic, 0, 1, 'UTF-8') . '.';
                    }
                    ?>
                </select>
            </label>
            <label>Доктор<br>
                <select name="ID_doctor">
                    <option>Выбор доктора</option>
                    <?php foreach ($users as $user){
                        echo '<option value="' .$user->id. '">' . $user->Surname . ' '
                            . mb_substr($user->Name, 0, 1, 'UTF-8') . '. '
                            . mb_substr($user->Patronymic, 0, 1, 'UTF-8') . '.';
                    }
                    ?>
                </select>
            </label>
            <label>Кабинет<br>
                <select name="ID_office">
                    <option>Выбор кабинета</option>
                    <?php foreach ($offices as $office){
                        echo '<option value="' .$office->ID_office. '">' . $office->Office;
                    }
                    ?>
                </select>
            </label>
            <label>Дата приема <input type="date" name="Date_of_admission"></label>
            <label>Диагноз<br>
                <select name="ID_diagnosis">
                    <option>Выбор диагноза</option>
                    <?php foreach ($diagnosises as $diagnosis){
                        echo '<option value="' .$diagnosis->ID_diagnosis. '">' . $diagnosis->Diagnosis;
                    }
                    ?>
                </select>
            </label>
            <!-- <label>Доктор <input type="text" name="ID_doctor"></label>
            <label>Кабинет <input type="text" name="ID_office"></label>
            <label>Дата приема <input type="date" name="Date_of_admission"></label>
            <label>Диагноз <input type="text" name="ID_diagnosis"></label> -->
            <button>Добавить</button>
        </form>
    </div>
</div>
<style>
   select{
      border: none;
      background: none;
      outline: none;
   }
   h2{
      text-align: center;  
      margin-top: 30px;
      font-family: sans-serif;
      font-weight: 750;
      color: #6c0000;
   }
   form{
      display: flex;
      flex-direction: column;
      gap: 15px;
      padding: 30px 0;
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