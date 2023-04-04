<div id="message">
    <h2>
        Добро пожаловать, <?= app()->auth::user()->Name . ' ' . app()->auth::user()->Patronymic; ?>
    </h2>
</div>
<style>
    #message{
        margin-top: 20px;
        font-family: sans-serif;
        font-weight: 750;
        color: #6c0000;
        background: antiquewhite;
        width: 90%;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 20px black;
        text-align: center;
    }
</style>