<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;
    private $list;

    public function setUp():void {
        parent::setUp();
        $this->list = TodoList::factory()->create(['name' => "hasan"]);
    }
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
      // $this->assertEquals(1, count($response->json()));

       $this->assertEquals('hasan', $response->json()[0]['name']);

    }

    public function test_single_todo_show(){
        // prepare
        //$list = TodoList::factory()->create();

        // action
        $response = $this->getJson(route("todo_list.show", 1))->assertOk()->json();

        // predict
        $this->assertEquals($response['name'], $this->list->name);
    }
}
