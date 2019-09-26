@extends('layouts.default')

@section('title', 'コメント')

@section('content')
  <h1>コメント</h1>
  <dl>
    <dt>ID:</dt>
    <dd>{{ $comment->id }}</dd>
    <dt>Title:</dt>
    <dd>{{ $comment->title }}</dd>
    <dt>Body:</dt>
    <dd>{{ $comment->body }}</dd>
  </dl>
  <p>
    <a href="{{ action('CommentsController@edit', $comment->id) }}">
      ［編集］
    </a>
  </p>
  <div>
    <form action="{{ action('CommentsController@destroy', $comment->id) }}" method="post">
      @csrf
      @method('DELETE')
      <button>コメント投稿の削除</button>
    </form>
  </div>
@endsection
