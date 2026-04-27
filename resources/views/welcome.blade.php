<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KOMEK MY TICKET</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('components.hero')
        @include('components.header')
        @include('components.nav')
        @include('components.dates')
        @include('components.card')
        @include('components.footer')
    </body>
</html>
