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
    <a class="signup" href="addDiagnosis">Добавить диагноз</a>
</div>
<style>
    h2{
        text-align: center;
        margin-top: 30px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        margin-bottom: 20px;
    }
    table{
        background: antiquewhite;
        padding: 20px;
        border-radius: 10px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        margin-bottom: 15px;
    }
    td{
        padding-left: 10px;
        background: #e8bb99;
    }
    th{
        padding: 10px 10px;
        /* background: #e8bb99; */
        border-right: solid 2px;
        border-bottom: solid 2px;
    }
    .signup:hover{
        border-bottom: 3px solid;
    }
</style>

