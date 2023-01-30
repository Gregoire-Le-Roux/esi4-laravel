<?php

namespace Tests\Unit;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Testing\Assert;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $task = new Task();

        $task->name = 'mon nom';
        $task->done = true;

        $todoList = TodoList::factory()->create();
        $task->todoList()->associate($todoList);

        $task->save();

        $task->refresh();

        Assert::assertEquals('mon nom', $task->name);
        Assert::assertTrue($task->done);
        Assert::assertEquals($todoList->id, $task->todoList->id);
    }


    public function test_belongs_to_todo_list()
    {

        $task = new Task();

        $task->name = 'le nom';
        $task->done = true;

        $todoList = TodoList::factory()->create();

        $task->todoList()->associate($todoList);

        $task->save();

        $task = Task::query()->firstOrFail();

        Assert::assertEquals($todoList->id, $task->todoList->id);
    }
}
