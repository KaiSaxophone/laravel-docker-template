<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

// /todoアクセス時の処理
class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', ['todos' => $todos]);
    }
}
