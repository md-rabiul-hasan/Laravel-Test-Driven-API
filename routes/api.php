<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::group(['prefix' => 'api'], function(){
    Route::get('todo-list', [TodoListController::class, 'index'])->name('todo_list.store');
});

