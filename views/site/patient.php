 <div class="fut-admissions">
    <h2>Пациенты</h2>
    <div class="list-of-patients">
        <form method="post">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>">
            <input type="text" name="find" placeholder="Фамилия пациента">
            <button>Найти</button>
        </form>
        <div>
            <ul>
                <?php foreach ($patient as $p){?>
                    <li>
                        <p><?= $p->Surname ?>  <?= $p->Name?>  <?= $p->Patronymic?></p>
                        <a id="one" href="<?= app()->route->getUrl('/onePatient?id='. $p->id) ?>">Подробнее</a>
                    </li>
                <?php };?>
            </ul>
        </div>
        <?php if (app()->auth::idPost() == 2):
            ?>
            <a href="<?= app()->route->getUrl('/addPatient') ?>">Добавление пациента</a>
        <?php endif;?>
    </div>
</div>
<style>
    ul{
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    h2{
        text-align: center; 
        margin-top: 30px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        margin-bottom: 20px;
    }
    #one{
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    #one:hover{
        border-bottom: 3px solid;
    }
    .list-of-patients{
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
    .patient{
        width: 70%;
    }
    .patient:hover{
        border-bottom: 3px solid;
    }
    input{
        display: flex;
        justify-content: space-evenly;
        border: none;
        border-bottom: 3px solid;
        width: 100%;
        background: none;
        outline: none;
        margin-bottom: 10px;
    }
    button{
        font-family: sans-serif;
        font-weight: 750;
        padding: 5px 10px;
        border-radius: 10px;
        border: none;
        background: #6c0000;
        color: #fff;
    }
</style>
