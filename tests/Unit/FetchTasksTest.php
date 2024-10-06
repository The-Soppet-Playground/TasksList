<?php

namespace Tests\Unit;

use App\Models\Tasks;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\TestCase;

class FetchTasksTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_returns_a_collection_of_models()
    {
        // Create test data
        Tasks::factory()->count(10)->create();

        $tasks = new Tasks();
        $collection = $tasks->fetchTasks();

        // Assertions
        $this->assertInstanceOf(Collection::class, $collection);
        $this->assertCount(10, $collection);
    }

    #[Test]
    public function it_returns_a_single_model_from_a_collection_of_models_at_random()
    {
        // Create test data
        Tasks::factory()->count(10)->create();

        $task_id = Tasks::all()->random()->id;
        $task = Tasks::find($task_id);

        $this->assertInstanceOf(Tasks::class, $task);
        $this->assertEquals($task_id, $task->id);
    }

    #[Test]
    public function it_returns_an_empty_collection_when_no_models_exist()
    {
        // Call the function
        $profile = new Tasks();
        $collection = $profile->fetchTasks();

        // Assertions
        $this->assertInstanceOf(Collection::class, $collection);
        $this->assertEmpty($collection);
    }
}
