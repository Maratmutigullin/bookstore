<?php

namespace App\Tests\Controller;

use App\Tests\AbstractControllerTest;

class AdminControllerTest extends AbstractControllerTest
{

    public function testGrantAuthor()
    {
        $user = $this->createUser('user@test.com', 'password');

        $userName = 'admin@test.com';
        $password = 'testtest';
        //создаем админа
        $this->createAdmin($userName, $password);
        //авторизуем админа
        $this->auth($userName, $password);
        //меняем права пользователю
        $this->client->request('POST', '/api/v1/admin/grantAuthor/' . $user->getId());

        $this->assertResponseIsSuccessful();
    }
}
