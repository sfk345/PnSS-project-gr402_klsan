 <div class="fut-admissions">
    <h2>Пациенты</h2>
    <div class="list-of-patients">
        <?php if ((app()->auth->user()->Role_id = 1)): ?>
            <form>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>">
                <label>Пациенты по дате
                    <select name="Date_of_admission">
                        <?php foreach ($admission as $adm){?>
                            <option value="<?= $adm->id ?>"><?php $adm->Date_of_admission?></option>
                        <?php }?>
                    </select>
                </label>
            </form>
        <a class="patient" href="addPatient">Добавить пациента</a>
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
        width: 55%;
    }
    .patient:hover{
        border-bottom: 3px solid;
    }
</style>
