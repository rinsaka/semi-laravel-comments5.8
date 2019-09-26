<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>コメント一覧</title>
</head>
<body>
  <h1>コメント一覧</h1>
  <ur>
    @foreach ($comments as $comment)
      <li>{{ $comment->title }}</li>
    @endforeach
  </ur>
</body>
</html>
