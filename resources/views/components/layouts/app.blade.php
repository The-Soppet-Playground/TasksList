<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="w-screen h-screen m-0 p-0">
    <div class="w-full h-full m-1 p-1">
        {{ $slot }}
    </div>
</body>

</html>
