<header class="header">
    <div class="header-content">

        <div class="header-logo" id="scroll-to-top">
            @if(!empty($logo['image_logo']))
                <img src="{{$logo['image_logo']}}" alt="{{$logo['image_logo']}}">
            @else
                {{$logo['text_logo']}}
            @endif
        </div>
        <nav>
            <ul class="header-nav">
                @foreach($sections as $section)
                    @if($section['name'] !== \App\Enums\LandingEnum::SubHeader->name)
                        <li>
                            <a href="#{{ $section['name'] }}">
                                {{ $section['short_label'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<script>
    document.getElementById('scroll-to-top').addEventListener('click', function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
</script>