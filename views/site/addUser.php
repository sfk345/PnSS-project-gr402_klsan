<?php
?>
<div class="add-user">

    <h2>Добавление пользователя</h2>
    <div class="add">
        <a class="patient" href="addPatient">Добавить пациента</a>
        <a class="signup" href="signup">Добавить пользователя</a>
    </div>
</div>
<style>
.add{
    text-align: center;
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
.signup{
    margin-right: 15px;
}
h2{
   margin-top: 30px;
   font-family: sans-serif;
   font-weight: 750;
   color: #6c0000;
}
.patient{
   color: #6c0000;
   font-family: sans-serif;
   font-weight: 750;

}
.patient:hover{
    border-bottom: 3px solid;
}
.signup:hover{
    border-bottom: 3px solid;
}
</style>