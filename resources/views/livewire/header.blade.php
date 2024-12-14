<header class="header">
    <div class="header-content">

        <div class="header-logo">
            @if(!empty($logo['image_logo']))
                <img src="{{$logo['image_logo']}}" alt="{{$logo['image_logo']}}">
            @else
                {{$logo['text_logo']}}
            @endif
        </div>
        <nav>
            <ul class="header-nav">
                @foreach($sections as $section)
                    <li>
                        <a href="#{{ $section['name'] }}">
                            {{ $section['short_label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>