<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use App\Entity\Task;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Response;

class TaskControllerTest extends WebTestCase
{
    use FixturesTrait;

    /**
     * @covers \App\Controller\TaskController::index
     */
    public function testGetAllTask(): void
    {
        $client = static::createClient();
        $this->loadFixtures(['App\DataFixtures\TaskFixture']);
        $client->request('GET', '/app/');
        $this->assertResponseIsSuccessful();
    }

    /**
     * @covers \App\Controller\TaskController::new
     */
    public function testCreateTask(): void
    {
        $title = 'Test';
        $description = 'Lorem ipsum test';
        $score = 34;

        $client = static::createClient();
        $crawler = $client->request('POST', '/app/ajouter');
        $form = $crawler->selectButton('Ajouter la tâche')->form([
            'task[title]' => $title,
            'task[description]' => $description,
            'task[score]' => $score,
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/app/', Response::HTTP_FOUND);
        $client->followRedirect();
    }

    /**
     * @covers \App\Controller\TaskController::new
     */
    public function testFailedCreateTask(): void
    {
        $title = '';
        $description = 'Lorem ipsum test';
        $score = 34;

        $client = static::createClient();
        $crawler = $client->request('POST', '/app/ajouter');
        $form = $crawler->selectButton('Ajouter la tâche')->form([
            'task[title]' => $title,
            'task[description]' => $description,
            'task[score]' => $score,
        ]);
        $client->submit($form);
        $this->assertSelectorTextContains('li', 'This value should not be blank.');
    }

    /**
     * @covers \App\Controller\TaskController::show
     */
    public function testShowTask(): void
    {
        $client = static::createClient();
        $this->loadFixtures(['App\DataFixtures\TaskFixture']);
        $client->request('GET', '/app/1');

        $this->assertResponseIsSuccessful();
    }

    /**
     * @covers \App\Controller\TaskController::edit
     */
    public function testEditTask(): void
    {
        $client = static::createClient();
        $this->loadFixtures(['App\DataFixtures\TaskFixture']);
        $client->request('GET', '/app/editer/1');

        $this->assertResponseIsSuccessful();
    }

    /**
     * @covers \App\Controller\TaskController::edit
     */
    public function testUpdateTask(): void
    {
        $client = static::createClient();
        $this->loadFixtures(['App\DataFixtures\TaskFixture']);
        $client->request('GET', '/app/editer/1');

        $json = new JsonEncoder();
        $task = $client->getResponse()->getContent();
        $client->request('POST', '/app/editer/1', ['body' => $json->encode($task, 'json')]);

        $this->assertResponseIsSuccessful();
    }

    /**
     * @covers \App\Controller\TaskController::delete
     */
    public function testDeleteTask(): void
    {
        $client = static::createClient();
        $this->loadFixtures(['App\DataFixtures\TaskFixture']);
        $client->request('GET', '/app/1');
        $task = $client->getResponse()->getContent();
        $client->request('DELETE', '/app/supprimer/1', ['body' => $task]);

        $this->assertResponseRedirects('/app/');
    }
}
