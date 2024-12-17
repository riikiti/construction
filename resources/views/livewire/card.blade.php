<div class="card" id="{{$name}}">
    <div class="card-title">
        <h2 class="title title--2">{{$title}}</h2>
    </div>
    <div class="card-components">
        @foreach ($cards as $item)
            @if($item['is_active'])
               <div class=card-components__item>
                   <img src="{{$item['image']}}" alt="{{$item['image']}}">
                   <h3>{{$item['title']}}</h3>
                   <p>{{$item['description']}}</p>
               </div>
            @endif
        @endforeach
    </div>
</div>