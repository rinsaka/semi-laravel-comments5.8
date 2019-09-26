<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href="{{ asset('/mycss/styles.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
</body>
