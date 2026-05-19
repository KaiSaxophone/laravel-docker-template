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

    // フォームに入力されたcontentを取得
    public function store(Request $request)
    {
        $content = $request->input('content');
        // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
        $todo = new Todo();
        // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
        $todo->content = $content;
        // 3. Todoインスタンスの->save()を実行してオブジェクトの状態をDBに保存するINSERT文を実行
        $todo->save();

        return redirect()->route('todo.index');
    }
}
