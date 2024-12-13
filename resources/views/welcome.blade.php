<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite([ 'resources/js/app.js','resources/scss/app.scss','resources/css/app.css'])
</head>
<body>

<header class="header">
    <livewire:accordion/>

</header>
<div class="layout">
    <div class="layout-content">
        <livewire:accordion/>
        <livewire:slider/>
    </div>


</div>

</body>
</html>
