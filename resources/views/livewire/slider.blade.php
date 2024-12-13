<div class="slider">
    <!-- Слайды -->
    <div class="slides" style="position: relative; overflow: hidden;">
        @foreach ($slides as $index => $slide)
            <div
                    class="slide"
                    style="display: {{ $index === $currentSlide ? 'block' : 'none' }};"
            >
                <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}" style="width: 100%; height: auto;">
                <div class="slide-content">
                    <h2>{{ $slide['title'] }}</h2>
                    <p>{{ $slide['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Навигация -->
    <div class="navigation">
        <button wire:click="prevSlide" class="prev">❮</button>
        <button wire:click="nextSlide" class="next">❯</button>
    </div>
</div>
