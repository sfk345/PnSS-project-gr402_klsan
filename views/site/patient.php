<h1>Список пациентов</h1>
<ol>
    <?php
    foreach ($patients as $pat) {
        echo '<li>' . $pat->Surname . '</li>';
    }
    ?>
</ol>
