<div class="layout-content" id="{{$name}}">
    <div class="slider">
        <div class="slider-title">
            <h2 class="title title--2"> {{$title}}</h2>
        </div>
        <!-- Слайды -->
        <div class="slides" style="position: relative; overflow: hidden;">
            @if(!empty($slides))
                @php
                    $hasActiveSlides = false;
                    foreach ($slides as $slide) {
                        if ($slide['is_active']) {
                            $hasActiveSlides = true;
                            break;
                        }
                    }
                @endphp
                @if($hasActiveSlides)
                    @foreach ($slides as $index => $slide)
                        @if($slide['is_active'])
                            <div class="slide" style="display: {{ $index === $currentSlide ? 'block' : 'none' }};">
                                <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}"
                                     style="width: 100%; height: auto;">
                                <div class="slide-content">
                                    <h2>{{ $slide['title'] }}</h2>
                                    <p>{{ $slide['description'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div>Все картинки не активны</div>
                @endif
            @else
                <div>Картинок пока нет</div>
            @endif

        </div>

        @if(!empty($slides))
            <!-- Навигация -->
            <div class="navigation">
                <button wire:click="prevSlide" class="prev">❮</button>
                <button wire:click="nextSlide" class="next">❯</button>
            </div>
        @endif
    </div>
</div>
