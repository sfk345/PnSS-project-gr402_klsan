<div class="h2">
    <h2>Запись</h2>
</div>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>">
        <div>
            <input disabled name="id" value="<?= $admissions->id ?>"><br>
            <lable>Пациент: <?= $patients->Surname . ' '
                . $patients->Name . ' '
                . $patients->Patronymic ?>
            </lable><br>
            <lable>Доктор: <?= $users->Surname . ' '
                . $users->Name . ' '
                . $users->Patronymic ?>
            </lable><br>
            <lable>Кабинет: <?= $admissions->id ?></lable>
        </div>
        <div>
            <div>
                <lable>Дата приема: <?= $admissions->Date_of_admission ?></lable>
            </div>
            <lable>Диагноз:
                <?= $diagnos->Diagnosis ?><br>
                <?php if ((app()->auth->user()->Role_id = 3)): ?>
                <select name="ID_diagnosis">
                    <?php foreach ($diagnosises as $d){
                        echo '<option value="' .$d->ID_diagnosis. '">' . $d->Diagnosis;
                    }
                    ?>
                </select>    
            </lable>
            <button>Сохранить</button>
            <?php endif;?>
        </div>
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
        margin-top: 10px;
        padding: 10px;
        border-radius: 10px;
        border: none;
        background: #6c0000;
        color: #fff;
    }
</style>
