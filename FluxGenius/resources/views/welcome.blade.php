<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- ico -->
        <link rel="icon" type="image/x-icon" href="{{ url('fluxg.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Stylesheet -->
        @vite('resources/css/app.css')

        {{-- Script --}}
        @vite('resources/js/app.js')

    </head>
    <body>
        <div id="app">
            <main-component></main-component> 
        </div>
    </body>
</html>
