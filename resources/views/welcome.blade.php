<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite([ 'resources/js/app.js','resources/scss/app.scss','resources/css/app.css'])
</head>
<body>
<livewire:header :logo="$logo"/>
<div class="layout">
    <div class="layout-content">
        @foreach($page as $item)
            @if($item['is_active'])
                @switch($item['name'])
                    @case(\App\Enums\LandingEnum::Accordion->name)
                        <livewire:accordion :title="$item['label']"/>
                        @break
                    @case(\App\Enums\LandingEnum::Slider->name)
                        <livewire:slider :title="$item['label']" />
                        @break
                    @case(\App\Enums\LandingEnum::Card->name)
                        <livewire:card :title="$item['label']" />
                        @break
                @endswitch
            @endif
        @endforeach
    </div>
</div>

</body>
</html>
