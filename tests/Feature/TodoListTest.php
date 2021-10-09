<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_todo_list()
    {
       // prepare

       // action 
        $response = $this->getJson(route('todo_list.store'));

       // predict
       $this->assertEquals(1, count($response->json()));

    }
}
