<div class="fut-admissions">
    <h2>Будущие записи</h2>
    <div class="list-of-admissions">
        <ul>
            <?php foreach ($admissions as $adm){?>
                <li>
                    <p><?= $adm->Date_of_admission?> - <?= $adm->ID_patient?> - <?= $adm->ID_diagnosis?></p>
                    <!-- <a class="editBtn" href='<?= app()->route->getUrl("/employee_change?username=$employee->username")?>'></a> -->
                </li>
            <?php };?>         
        </ul>
    </div>
</div>
<style>
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
        box-shadow: 0px 5px 20px black;
    }
</style>