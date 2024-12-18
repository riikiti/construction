<div class="layout-content" id="{{$name}}">
    <div class="horizontal">
        <div class="horizontal-title">
            <h2 class="title title--2"> {{$title}}</h2>
        </div>
    </div>
    <div class="horizontal-content">
        @foreach($cards as $card)
            @if($card['is_active'])
                <div class="horizontal-content__item">
                    <img src="{{$card['image']}}" alt="{{$card['image']}}">
                    <div class="horizontal-content__item-body">
                        <h3>{{$card['title']}}</h3>
                        <p>{{$card['description']}}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>