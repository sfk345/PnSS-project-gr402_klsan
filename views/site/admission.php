<div class="fut-admissions">
    <h2>Будущие записи</h2>
    <div class="list-of-admissions">
        <?php foreach ($admissions as $adm){?>
            <p><?= $adm->Date_of_admission?></p>
        <?php };?>
    </div>
</div>
<style>
    h2{
        margin-top: 15px;
    }
    .fut-admissions{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .list-of-admissions{
        margin-top: 20px;
        font-size: 20px;
        background: antiquewhite;
        width: 90%;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 20px black;
    }
</style>