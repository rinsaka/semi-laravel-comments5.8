<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>コメント編集</title>
</head>
<body>
  <h1>コメント編集</h1>
  <div>
    <form method="post" action="{{ route('comment_update') }}" enctype='multipart/form-data'>
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $comment->id }}">
      <p>
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" value="{{ $comment->title }}{{ old('title') }}">
        @if ($errors->has('title'))
          <span class="error">{{ $errors->first('title') }}</span>
        @endif
      </p>

      <p>
        <label for="body">Body: </label>
        <textarea name="body" id="body" rows="4" cols="50">{{ $comment->body }}{{ old('body') }}</textarea>
        @if ($errors->has('body'))
          <span class="error">{{ $errors->first('body') }}</span>
        @endif
      </p>
      <p>
        <input type="submit" value="更新">
      </p>

    </form>
  </div>

</body>
</html>
