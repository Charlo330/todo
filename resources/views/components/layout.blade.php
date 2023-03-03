<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('layout.titre') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-sky-400 p-8 ">
@isset($titre)
    <h1 class="text-3xl mb-2 font-bold underline">{{ $titre }}</h1>
@endisset
{{ $slot }}
</body>
</html>


