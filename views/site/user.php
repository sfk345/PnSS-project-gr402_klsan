<div class="offic-of-doctor">
    <div class="data-of-doctor">
        <div id="img">
            <img src="#" alt="#">
        </div>
        <div id="data">
            <p>Фамилия: <?= $users->Surname;?></p>
            <p>Имя: <?= $users->Name;?></p>
            <p>Отчество: <?= $users->Patronymic;?></p>
            <p>Дата рождения: <?= $users->Date_of_birth;?></p>
        </div>
    </div>
    <div class="admissions">
        <div class="future-admissions">
            <h3>Будущие записи</h3>
            <a href="admission">Открыть</a>
        </div>
        <div class="past-admissions">
            <h3>Прошедшие записи</h3>
            <a href="#">Открыть</a>
        </div>
        <div class="patients">
            <h3>Пациенты</h3>
            <a href="patient">Открыть</a>
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
    .admissions{
        display: flex;
        justify-content: space-between;
        width: 80%;

    }
    .past-admissions{
        margin-top: 20px;
    }
    .future-admissions{
        margin-top: 20px;
    }
</style>