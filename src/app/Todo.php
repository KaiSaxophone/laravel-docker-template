<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    // フォーム入力値の項目指定
    protected $fillable = [
        'content',
    ];
}
