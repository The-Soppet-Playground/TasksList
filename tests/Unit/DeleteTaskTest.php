<?php

namespace Tests\Unit;

use App\Models\Tasks;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\TestCase;

class DeleteTaskTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_removes_a_model_randomly(): void
    {
        $model = new Tasks();
        $model->factory()->count(10)->create();

        $randomTask = $model->all()->random();
        $task = $model->deleteTask($randomTask);

        $this->assertCount(9, $model->all());
        $this->assertEmpty($task);
    }
}
