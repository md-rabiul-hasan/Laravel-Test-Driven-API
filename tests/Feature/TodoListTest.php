<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_todo_list()
    {
       // prepare
        TodoList::factory()->create(['name' => "hasan"]);
      

        
       // action 
        $response = $this->getJson(route('todo_list.store'));

       // predict
      // $this->assertEquals(1, count($response->json()));

       $this->assertEquals('hasan', $response->json()[0]['name']);

    }

    public function test_single_todo_show(){
        // prepare
        $list = TodoList::factory()->create();

        // action
        $response = $this->getJson(route("todo_list.show", 1))->assertOk()->json();
      

        // predict
        $this->assertEquals($response['name'], $list->name);
    }
}
