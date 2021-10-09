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
        $this->list = TodoList::factory()->create();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_all_todo_list()
    {
       // prepare
     
       // action 
        $response = $this->getJson(route('todo_list.index'));

       // predict
      // $this->assertEquals(1, count($response->json()));

       $this->assertEquals($this->list->name, $response->json()[0]['name']);

    }

    public function test_single_todo_show(){
        // prepare
        //$list = TodoList::factory()->create();

        // action
        $response = $this->getJson(route("todo_list.show", 1))->assertOk()->json();

        // predict
        $this->assertEquals($response['name'], $this->list->name);
    }


    public function test_todo_list_store(){
        $response = $this->postJson(route('todo_list.store', ['name' => $this->list->name]))->assertCreated()->json();
        $this->assertEquals($this->list->name, $response['name']);
    }




}
