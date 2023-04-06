<h2>Список кабинетов</h2>

<div>
    <table>
        <thead>
        <tr>
            <th>ID кабинета</th>
            <th>Название кабинета</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($offices as $office){
            echo '<tr>' . '<td>' .$office->ID_office .'</td>'.'<td>' . $office->Office .'</td></tr>';
        }
        ?>
        </tbody>
    </table>
    <a class="office" href="addOffice">Добавить кабинет</a>
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
    .office:hover{
        border-bottom: 3px solid;
    }
</style>
