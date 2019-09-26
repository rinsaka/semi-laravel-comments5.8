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
}
