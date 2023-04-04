<div class="fut-admissions">
    <h2>Будущие записи</h2>
    <div class="list-of-admissions">
        <?php foreach ($admissions as $adm){?>
            <p><?= $adm->Date_of_admission?> - <?= $adm->ID_doctor?> - <?= $adm->ID_diagnosis?></p>
        <?php };?>
    </div>
</div>
<style>
    h2{
        text-align: center; 
        margin-top: 30px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
    }
    .fut-admissions{
        display: flex;
        flex-direction: column;
    }
    .list-of-admissions{
        margin-top: 20px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        background: antiquewhite;
        width: 90%;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 20px black;
    }
</style>