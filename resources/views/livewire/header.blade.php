<header class="header">
    <div class="header-content">

        <!-- Логотип -->
        <div class="header-logo" id="scroll-to-top">
            @if(!empty($logo['image_logo']))
                <img src="{{$logo['image_logo']}}" alt="{{$logo['image_logo']}}">
            @else
                {{$logo['text_logo']}}
            @endif
        </div>

        <!-- Кнопка бургер-меню -->
        <button class="burger-menu" id="burger-menu-toggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Навигация -->
        <nav class="header-nav-wrapper">
            <ul class="header-nav">
                @foreach($sections as $section)
                    @if($section['name'] !== \App\Enums\LandingEnum::SubHeader->name)
                        <li class="header-nav__item">
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
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });


    const burgerMenuToggle = document.getElementById('burger-menu-toggle');
    const navWrapper = document.querySelector('.header-nav-wrapper');

    burgerMenuToggle.addEventListener('click', () => {
        burgerMenuToggle.classList.toggle('active');
        navWrapper.classList.toggle('open');
    });


    const navItems = document.querySelectorAll('.header-nav__item a');

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            burgerMenuToggle.classList.remove('active');
            navWrapper.classList.remove('open');
        });
    });
</script>

