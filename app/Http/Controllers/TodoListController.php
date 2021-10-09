<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller 
{
    public function index(){
        $data = [
            "list" => []
        ];
        return response()->json($data);
    }
}
