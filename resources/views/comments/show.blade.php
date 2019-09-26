<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>コメント</title>
</head>
<body>
  <h1>コメント</h1>
  <dl>
    <dt>ID:</dt>
    <dd>{{ $comment->id }}</dd>
    <dt>Title:</dt>
    <dd>{{ $comment->title }}</dd>
    <dt>Body:</dt>
    <dd>{{ $comment->body }}</dd>
  </dl>
</body>
</html>
