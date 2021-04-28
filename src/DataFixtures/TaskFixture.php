<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Task;

class TaskFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $task = new Task();
            $task->setTitle('Tâche n°'.$i + 1);
            $task->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat interdum tellus, sed malesuada risus pulvinar ac. Pellentesque sed velit lacus. In suscipit, massa in ultrices dapibus, ante nulla convallis diam');
            $task->setScore(mt_rand(10, 100));
            $manager->persist($task);
        }

        $manager->flush();
    }
}
