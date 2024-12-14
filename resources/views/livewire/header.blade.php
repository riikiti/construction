<header class="header">
    <nav >
        <ul class="">
            @foreach($sections as $section)
                <li>
                    <a href="#{{ $section['name'] }}">
                        {{ $section['short_label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>