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

    // 新規登録画面を表示
    public function create()
    {
        return view('todo.create');
    }

    // フォームに入力された値を取得
    public function store(Request $request)
    {
        // フォームから送信された入力値を一括取得
        $inputs = $request->all();

        $todo = new Todo();
        $todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.index');
    }

    // 詳細表示
    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);

        return view('todo/show', ['todo' => $todo]);
    }
}
