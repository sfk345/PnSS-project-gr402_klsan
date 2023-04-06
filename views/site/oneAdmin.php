<div class="offic-of-doctor">
<div class="data-of-doctor">
    <div id="img">
        <img src="../../pnss-new/public/img/<?= $users->img;?>" style="width: 100px">
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
        <h3>Записи</h3>
        <a href="admission">Открыть</a>
    </div>
    <div class="patients">
        <h3>Пациенты</h3>
        <a href="patient">Открыть</a>
    </div>
</div>
</div>
<style>
    p{
        margin-top: 5px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
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
        margin-bottom: 30px;
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
    .future-admissions{
        margin-top: 20px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    .patients{
        margin-top: 20px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    .patients > a:hover{
        border-bottom: 3px solid;
    }
    .future-admissions > a:hover{
        border-bottom: 3px solid;
    }
    .past-admissions > a:hover{
        border-bottom: 3px solid;
    }
</style>
