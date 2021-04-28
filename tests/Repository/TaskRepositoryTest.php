<?php


namespace App\Tests\Repository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Task;
use App\Repository\TaskRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;

class TaskRepositoryTest extends KernelTestCase
{
    use FixturesTrait;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testSearchByTitle()
    {
        $this->loadFixtures(['App\DataFixtures\TaskFixture']);
        $task = $this->entityManager
            ->getRepository(Task::class)
            ->find(1)
        ;

        $this->assertSame(1, $task->getId());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->entityManager->close();
        $this->entityManager = null;
    }
}