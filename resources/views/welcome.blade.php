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

    @foreach($page as $item)
        @if($item['is_active'])
            @switch($item['name'])
                @case(\App\Enums\LandingEnum::Accordion->name)
                    <livewire:accordion :title="$item['label']"/>
                    @break
                @case(\App\Enums\LandingEnum::Slider->name)
                    <livewire:slider :title="$item['label']"/>
                    @break
                @case(\App\Enums\LandingEnum::Card->name)
                    <livewire:card :title="$item['label']"/>
                    @break
                @case(\App\Enums\LandingEnum::Connect->name)
                    <livewire:connect :title="$item['label']"/>
                    @break
                @case(\App\Enums\LandingEnum::SubHeader->name)
                    <livewire:sub-header/>
                    @break
                @case(\App\Enums\LandingEnum::HorizontalCards->name)
                    <livewire:horizontal-card :title="$item['label']"/>
                    @break
            @endswitch
        @endif
    @endforeach

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/inputmask.min.js"></script>
</body>
</html>
