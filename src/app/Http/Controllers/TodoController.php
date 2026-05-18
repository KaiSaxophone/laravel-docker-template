<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// /todoアクセス時の処理
class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }
}
