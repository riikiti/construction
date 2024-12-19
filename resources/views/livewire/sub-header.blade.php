<div class="sub-header">
    <div class="sub-header__content">
      <h1 class="title title--1">  {{$subHeader['title']}}</h1>
       <p> {{$subHeader['description']}}</p>
        <a href="#{{\App\Enums\LandingEnum::Connect->name}}">
           Заказать
        </a>
    </div>
    <img src="{{$subHeader['image']}}" alt="{{$subHeader['image']}}">
</div>
