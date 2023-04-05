<h2>Список диагнозов</h2>

<div>
    <table>
        <thead>
            <tr>
                <th>ID диагноза</th>
                <th>Название диагноза</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($diagnosises as $diagnosis){
            echo '<tr>' . '<td>' .$diagnosis->ID_diagnosis .'</td>'.'<td>' . $diagnosis->Diagnosis .'</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>

