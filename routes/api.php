<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::group(['prefix' => 'api'], function(){
    Route:: get('todo-list', [TodoListController::class, 'index'])->name('todo_list.index');
    Route:: get('todo-list/{todolist}', [TodoListController::class, 'show'])->name('todo_list.show');
    Route:: post('todo-list-store', [TodoListController::class, 'store'])->name('todo_list.store');
});

