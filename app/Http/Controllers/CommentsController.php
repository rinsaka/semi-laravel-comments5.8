<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;   // 追加する

class CommentsController extends Controller
{
  public function index()
  {
    $comments = Comment::orderBy('updated_at', 'DESC')
                  ->paginate(5);
    return view('comments.index')
              ->with('comments', $comments);
  }

  public function show($id)
  {
    // SELECT * FROM comments WHERE id = 2;  のイメージ
    $comment = Comment::where('id', '=', $id)
                ->first();
    if (!$comment) {  // コメントが取得できない（IDが不正の）場合はリダイレクト
      return redirect('/comments')->with('flash_message', 'コメントが見つかりません');
    }
    return view('comments.show')
            ->with('comment', $comment);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:10',  // 入力が必須で，最大10文字
      'body' => 'required'           // 入力が必須
    ]);

    $comment = new Comment();    // インスタンスを生成する
    $comment->title = $request->title; // タイトルをセット
    $comment->body = $request->body;   // 本文をセット
    $comment->save();                  // データベースに登録
    return redirect('/comments')
            ->with('flash_message', '投稿しました');
  }

  public function edit($id)
  {
    $comment = Comment::where('id', '=', $id)
                ->first();
    if (!$comment) {
      return redirect('/comments')->with('flash_message', 'コメントが見つかりません');
    }
    return view('comments.edit')    // show 関数との違いはここだけ
            ->with('comment', $comment);
  }

  public function update(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:10',  // 入力が必須で，最大10文字
      'body' => 'required'           // 入力が必須
    ]);
    $comment = Comment::where('id', '=', $request->id)
                ->first();
    if (!$comment) {
      return redirect('/comments')->with('flash_message', 'コメントが見つかりません');
    }
    $comment->title = $request->title;
    $comment->body = $request->body;
    $comment->save();
    return redirect()->action('CommentsController@show', $request->id)
                      ->with('flash_message', '更新しました');
  }

  public function destroy($id)
  {
    $comment = Comment::where('id', '=', $id)
                    ->first();
    if (!$comment) {
      return redirect('/comments')->with('flash_message', 'コメントが見つかりません');
    }
    $comment->delete();
    return redirect('/comments')
              ->with('flash_message', '削除しました');
  }
}
