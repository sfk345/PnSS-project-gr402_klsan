<div class="fut-admissions">
    <h2>Пациенты</h2>
    <div class="list-of-patients">
        <ul>
            <?php foreach ($patients as $patient){?>
                <li>
                    <p><?= $patient->Surname ?>  <?= $patient->Name?>  <?= $patient->Patronymic?></p>
                    <a href="<?= app()->route->getUrl('/onePatient?id='. $patient->id) ?>">Подробнее</a>
                </li>
            <?php };?>
        </ul>
    </div>
</div>
