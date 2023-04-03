<div class="fut-admissions">
    <h2>Пациент</h2>
    <div class="list-of-patient">
        <div class="one-patient">
            <p>Фамилия: <?= $patients->Surname?></p>
            <p>Имя: <?= $patients->Name?></p>
            <p>Отчество: <?= $patients->Patronymic?></p>
            <p>Дата рождения: <?= $patients->Date_of_birth?></p>
        </div>
        <div class="list-of-admissions">
            <h3>Записи</h3>
            <?php foreach ($patients->admissions as $admission){?>
                <p>Доктор <?= $admission->ID_doctor?></p>
                <p>Кабинет <?= $admission->ID_office?></p>
                <p>Дата приема <?= $admission->Date_of_admission?></p>
                <p>Диагноз <?= $admission->ID_diagnosis?></p>
            <?php };?>
        </div>
    </div>
</div>