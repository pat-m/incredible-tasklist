<?php

namespace App\Tests\Integration;

use Symfony\Component\Panther\PantherTestCase;

class TaskIntegrationTest extends PantherTestCase
{

    public function testSomething()
    {
        $client = static::createPantherClient();
        $client->wait(500);
        $client->request('GET', '/app');

        $this->assertSelectorTextContains('h2', 'Hello World');
    }
}
