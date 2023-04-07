<div class="offic-of-doctor">
    <div class="data-of-doctor">
        <div id="img-user">
            <img src="../../pnss-new/public/img/<?= $users->img;?>" style="width: 150px">
        </div>
        <div id="data">
            <p>Фамилия: <?= $users->Surname;?></p>
            <p>Имя: <?= $users->Name;?></p>
            <p>Отчество: <?= $users->Patronymic;?></p>
            <p>Дата рождения: <?= $users->Date_of_birth;?></p>
        </div>
    </div>
    <div class="pages">
        <a href="<?= app()->route->getUrl('/patient') ?>">Список пациентов</a>
        <?php
        if (app()->auth::idPost() == 1):
            ?>
            <a href="<?= app()->route->getUrl('/diagnosises') ?>">Список диагнозов</a>
            <a href="<?= app()->route->getUrl('/offices') ?>">Список кабинетов</a>
            <a href="<?= app()->route->getUrl('/signup') ?>">Добавление пользователя</a>
        <?php endif;?>

        <?php
        if (app()->auth::idPost() == 2):
                ?>
                <a href="<?= app()->route->getUrl('/addAdmission') ?>">Запись на прием</a>
                <a href="<?= app()->route->getUrl('/admission') ?>">Просмотр записей</a>
        <?php endif;?>
</div>
<style>
    p{
        margin-top: 5px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    a:hover{
        border-bottom: 3px solid;
    }

    .offic-of-doctor{
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        background: antiquewhite;
        border-radius: 15px;
        margin: 40px;
        padding: 40px;
    }
    .data-of-doctor{
        display: flex;
        margin-bottom: 30px;
    }
    #img-user{
        width: 150px;
        height: 150px;
    }
    #data{
        margin-left: 20px;
    }
    .pages{
        display: flex;
        flex-direction: column;
    }

</style>