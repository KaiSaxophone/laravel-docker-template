<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

// /todoアクセス時の処理
class TodoController extends Controller
{
    private $todo;

    // コンストラクタでTodoモデルをインスタンス化
    public function __construct(Todo $todo)
    {
        // $this->todoにTodoインスタンスを代入
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();

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

        $this->todo->fill($inputs);
        $this->todo->save();

        return redirect()->route('todo.index');
    }

    // 詳細表示
    public function show($id)
    {
        $todo = $this->todo->find($id);

        return view('todo/show', ['todo' => $todo]);
    }
}
