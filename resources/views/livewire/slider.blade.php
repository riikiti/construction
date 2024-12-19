<div class="layout-content" id="{{ $name }}">
    <div class="slider">
        <div class="slider-title">
            <h2 class="title title--2">{{ $title }}</h2>
        </div>

        <!-- Слайды -->
        <div class="slides" style="transform: translateX(-{{ $currentSlide * 100 }}%);">
            @if (!empty($slides))
                @foreach ($slides as $index => $slide)
                    <div class="slide {{ $index === $currentSlide ? 'active' : '' }}">
                        <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}" style="width: 100%; height: auto;">
                        <div class="slide-content">
                            <h2>{{ $slide['title'] }}</h2>
                            <p>{{ $slide['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div>Картинок пока нет</div>
            @endif
        </div>

        <!-- Навигация -->
        @if (!empty($slides))
            <div class="navigation">
                <button wire:click="prevSlide" class="prev">❮</button>
                <button wire:click="nextSlide" class="next">❯</button>
            </div>
        @endif
    </div>
</div>
