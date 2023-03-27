<?php
declare(strict_types=1);

try {
    //Создание экзекмпляра приложения и его запуск
    $app = require_once __DIR__ . '/../core/bootstrap.php';
    $app->run();
} catch (\Throwable $exception) {
    echo '<pre>';
    print_r($exception);
    echo '</pre>';
}
