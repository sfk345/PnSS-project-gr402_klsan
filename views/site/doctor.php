<div class="offic-of-doctor">
    <div class="data-of-doctor">
        <div id="img">
            <img src="#" alt="#">
        </div>
        <div id="data">
            <p>Фамилия: <?= $doctors->Surname;?></p>
            <p>Имя: <?= $doctors->Name;?></p>
            <p>Отчество: <?= $doctors->Patronymic;?></p>
            <p>Дата рождения: <?= $doctors->Date_of_birth;?></p>
            <p>Специализация: <?= $doctors->Specialisation;?></p>
        </div>
    </div>
    <div class="admissions">
        <div class="future-admissions">
            <h3>Будущие записи</h3>
            <?php
            // foreach ($admissions as $adm) {
            //     echo '<li>' . $adm->Date_of_birth . '</li>'
            // }
            ?>
        </div>
        <div class="past-admissions">
            <h3>Прошедшие записи</h3>

        </div>
    </div>
</div>
<style>
    .offic-of-doctor{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background: antiquewhite;
        border-radius: 15px;
        margin: 40px;
        padding: 40px;
    }
    .data-of-doctor{
        display: flex;
    }
    #img{
        width: 100px;
        height: 100px;
        background: burlywood;
    }
    #data{
        margin-left: 20px;
    }
</style>