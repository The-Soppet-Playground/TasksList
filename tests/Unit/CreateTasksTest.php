<?php

namespace Tests\Unit;

use App\Models\Tasks;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\TestCase;

class CreateTasksTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_creates_a_model(): void
    {
        $tasks = new Tasks();

        $title = fake()->sentence(3);
        $description = fake()->sentence();
        $task = $tasks->createTask([
            'title' => $title,
            'description' => $description
        ]);

        $this->assertEquals($title, $task->title);
        $this->assertEquals($description, $task->description);
        $this->assertEquals(now()->format('Y-m-d'), date_format($task->task_date, 'Y-m-d'));
    }
}
