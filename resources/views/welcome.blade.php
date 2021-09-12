<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>
@php
$color = 'blue';
@endphp

<body>
    <div class="container mx-auto">
        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                titulo 1
            </x-slot>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, perferendis. Quas accusamus atque earum
            beatae nobis consequatur doloribus repudiandae, veritatis, nihil voluptas obcaecati blanditiis
            exercitationem eveniet suscipit fugiat quis aliquid?
        </x-alert>
        <x-alert class="mb-8">
            <x-slot name="title">
                titulo 2
            </x-slot>
            hola prro
        </x-alert>
        <x-alert color="pink">
            <x-slot name="title">
                titulo 3
            </x-slot>
            hola gato feo
        </x-alert>
    </div>
</body>

</html>
