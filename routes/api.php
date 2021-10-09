<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::group(['prefix' => 'api'], function(){
    Route::get('todo-list', [TodoListController::class, 'index'])->name('todo_list.store');
    Route::get('todo-list/{todolist}', [TodoListController::class, 'show'])->name('todo_list.show');
});

