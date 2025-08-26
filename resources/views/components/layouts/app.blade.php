<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <title>{{ $title ?? 'Page Title' }}</title>

    </head>
    <body>
        {{ $slot }}
    </body>
</html>
