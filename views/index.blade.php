<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $title }} - @siteName()</title>
</head>
<body>
    <header class="header">
        <a href="/">
            Home
        </a>
        <a href="/specifications">
            Specifications
        </a>
        <a href="/episodes">
            Episodes
        </a>
    </header>

    <div class="container">
        <h1>{{ $title }}</h1>
        {!! $content !!}
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
