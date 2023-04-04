<div class="fut-admissions">
    <h2>Пациент</h2>
    <div class="list-of-patient">
        <div class="one-patient">
            <lable>Фамилия</lable><br>
            <input readonly type="text" name="Surname" value="<?= $patients->Surname?>"><br>
            <lable>Имя</lable><br>
            <input readonly type="text" name="Name" value="<?= $patients->Name?>"><br>
            <lable>Отчество</lable><br>
            <input readonly type="text" name="Patronymic" value="<?= $patients->Patronymic?>"><br>
            <lable>Дата рождения</lable><br>
            <input readonly type="text" name="Date_of_birth" value="<?= $patients->Date_of_birth?>">
        </div>
        <div class="list-of-admissions">
            <div class="h3">
                <h3>Записи</h3>
            </div>
            <div class="table-of-admissions">
                <table>
                    <thead>
                        <tr>
                            <th>Доктор</th>
                            <th>Кабинет</th>
                            <th>Дата приема</th>
                            <th>Диагноз</th>
                        <tr>
                    </thead>
                    <tbody>
                    <?php foreach ($patients->admissions as $admission){
                        echo '<tr>' . '<td>' .$admission->ID_doctor
                            .'</td>' . '<td>' .$admission->ID_office
                            .'</td>' . '<td>' .$admission->Date_of_admission
                            .'</td>' . '<td>' .$admission->ID_diagnosis
                            // . '<td><a href="' . app()->route->getUrl('/updateDiagnosis?id='. $diagnosis->id) . '">Изменить</a></td>'
                            . '<td><a href="' . app()->route->getUrl('/oneAdmission?id='. $admission->id) . '">Подробнее</a></td>'
                            .'</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    h3{
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        margin-bottom: 10px;
    }
    h2{
        text-align: center; 
        margin-top: 30px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        margin-bottom: 20px;
    }
    lable{
        margin-bottom: 10px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    input{
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        margin-bottom: 10px;
        border: none;
        border-bottom: 2px solid;
        margin-top: 10px;
    }
    table{
        background: antiquewhite;
        padding: 20px;
        border-radius: 10px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    td{
        padding-left: 10px;
        background: #e8bb99;
    }
    th{
        padding: 10px 10px;
        /* background: #e8bb99; */
        border-right: solid 2px;
        border-bottom: solid 2px;
    }
    .list-of-patient{
        display: flex;
        justify-content: space-between;
        gap: 20em;
    }
    .one-patient{
        margin-top: 10px;
    }
</style>