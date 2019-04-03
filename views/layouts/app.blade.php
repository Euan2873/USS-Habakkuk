<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }} - @siteName()</title>
    <link rel="stylesheet" href="/css/app.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('partials.seo')
</head>
<body class="font-sans leading-loose text-base font-normal text-black bg-white">
    @include('partials.header')

    <div class="container mx-auto">
        @yield('content')
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
