<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\TestFixturesBundle\Test\FixturesTrait;

class AppControllerTest extends WebTestCase
{
    use FixturesTrait;

    /**
     * @covers \App\Controller\AppController::index
     */
    public function testRedirectToApp(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }
}
