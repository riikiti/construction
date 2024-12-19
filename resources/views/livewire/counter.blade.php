<div class="layout-content" id="{{ $name }}">
    <h2 class="title title--2"> {{$title}}</h2>
    <div class="counter-block">
        @if(!empty($counters) )
            @foreach($counters as $item)
                <div class="counter-block__item">
                    <div class="counter-block__item-number">
                        <span class="counter" style="--from:0; --to:{{$item['number']}}; --time:4s;"></span>
                        <span class="prefix">{{$item['prefix']}}</span>
                    </div>
                    <h3>{{$item['title']}}</h3>
                </div>
            @endforeach
        @endif
    </div>
</div>