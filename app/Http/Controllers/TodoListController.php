<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function store(Request $request){
        
        $request->validate(['name' => ['required']]);

        $list = TodoList::create($request->all());
        //return response($list,Response::HTTP_CREATED);
        return $list;
    }
}
