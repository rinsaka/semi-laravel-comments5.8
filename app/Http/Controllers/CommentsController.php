<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;   // 追加する

class CommentsController extends Controller
{
  public function index()
  {
    $comments = Comment::get();    // SELECT * FROM comments; のイメージ
    return view('comments.index')
              ->with('comments', $comments);
  }

  public function show($id)
  {
    // SELECT * FROM comments WHERE id = 2;  のイメージ
    $comment = Comment::where('id', '=', $id)
                ->first();
    if (!$comment) {  // コメントが取得できない（IDが不正の）場合はリダイレクト
      return redirect('/comments');
    }
    return view('comments/show')
            ->with('comment', $comment);
  }
}
