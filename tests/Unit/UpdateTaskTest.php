<?php

namespace Tests\Unit;

use App\Models\Tasks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\TestCase;

class UpdateTaskTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_updates_model_by_random_id(): void
    {
        $tasks = new Tasks();
        $tasks->factory()->count(10)->create();
        $randomTasks = $tasks->all()->random();
        $task = $tasks->find($randomTasks->id);

        $title = 'New Update';
        $description = 'I am now new';

        $task->update([
            'title' => $title,
            'description' => $description
        ]);

        $this->assertInstanceOf(Tasks::class, $task);
        $this->assertNotEquals($randomTasks, $task);
        $this->assertEquals($title, $task->title);
        $this->assertEquals($description, $task->description);
    }
}
