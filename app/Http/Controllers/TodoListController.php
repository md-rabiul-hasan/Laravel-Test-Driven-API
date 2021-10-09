<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller 
{
    public function index(){
        $data = TodoList::all();
        return response()->json($data);
    }

    public function show(TodoList $todolist){
       // $todolist = TodoList::findOrFail($todolist);
       
        return response($todolist);
    }
}
