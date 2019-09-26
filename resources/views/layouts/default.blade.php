<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href="{{ asset('/mycss/styles.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    @if (session('flash_message'))
      <div class="flash_message" onclick="this.classList.add('hidden')">
        {{ session('flash_message') }}
      </div>
    @endif

    @yield('content')
  </div>
</body>
