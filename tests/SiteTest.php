<?php

use Model\User;
use PHPUnit\Framework\TestCase;
use Src\Application;
use Src\Settings;


class SiteTest extends TestCase
{
   /**
    * @dataProvider additionProvider
    * @runInSeparateProcess
     * @throws \PHPUnit\Framework\MockObject\Exception
    */
   public function testSignup(string $httpMethod, array $userData, string $message): void
   {
        //Выбираем занятый логин из базы данных
        if ($userData['Name'] === 'Name is busy') {
            $userData['Name'] = User::get()->first()->Name;
        }

        // Создаем заглушку для класса Request.
        $request = $this->createMock(\Src\Request::class);
        // Переопределяем метод all() и свойство method
        $request->expects($this->any())
            ->method('all')
            ->willReturn($userData);
        $request->method = $httpMethod;

        //Сохраняем результат работы метода в переменную
        $result = (new \Controller\Site())->signup($request);

        if (!empty($result)) {
            //Проверяем варианты с ошибками валидации
            $message = '/' . preg_quote($message, '/') . '/';
            $this->expectOutputRegex($message);
            return;
        }

        //Проверяем добавился ли пользователь в базу данных
        $this->assertTrue((bool)User::where('Name', $userData['Name'])->count());
        //Удаляем созданного пользователя из базы данных
        User::where('Name', $userData['Name'])->delete();

        //Проверяем редирект при успешной регистрации
        $this->assertContains($message, xdebug_get_headers());
    }


    //Метод, возвращающий набор тестовых данных
    public static function additionProvider(): array
    {
        return [
            ['POST', ['Name' => 'Name is busy', 'Surname' => '', 'Patronymic' => '', 'Date_of_birth' => '', 'Gender' => '', 'ID_post' => '', 'Password' => ''],
                '<p style="color: red">Поле Name должно быть уникально</p>'
            ],
            ['POST', ['Name' => 'Софья', 'Surname' => 'Клепцына', 'Patronymic' => 'Андреевна', 'Date_of_birth' => '2004-01-27', 'Gender' => 'Ж', 'ID_post' => '1', 'Password' => 'qweasdqweasd'],
                '<p style="color: red">Поле Name должно быть уникально</p>'
            ],
            ['POST', ['Name' => 'Софья123', 'Surname' => 'Клепцына', 'Patronymic' => 'Андреевна', 'Date_of_birth' => '2004-01-27', 'Gender' => 'Ж', 'ID_post' => '1', 'Password' => 'qweasdqweasd'],
                ''
            ],

        ];
    }


    //Настройка конфигурации окружения
    protected function setUp(): void
    {
        //Установка переменной среды
        $_SERVER['DOCUMENT_ROOT'] = '/var/www/html';

        //Создаем экземпляр приложения
        $GLOBALS['app'] = new Application(new Settings([
            'app' => include $_SERVER['DOCUMENT_ROOT'] . '/pnss-new/config/app.php',
            'db' => include $_SERVER['DOCUMENT_ROOT'] . '/pnss-new/config/db.php',
            'path' => include $_SERVER['DOCUMENT_ROOT'] . '/pnss-new/config/path.php',
        ]));

        //Глобальная функция для доступа к объекту приложения
        if (!function_exists('app')) {
            function app()
            {
                return $GLOBALS['app'];
            }
        }
    }


}
