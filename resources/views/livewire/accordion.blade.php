<div class="accordion">
    <div class="accordion-title">
        <h2 class="title--2">Часто задаваемые вопросы?</h2>
    </div>
    @foreach ($items as $item)
        <div class="accordion-item" x-data="{ open: false }">
            <div class="accordion-item__title" @click="open = !open">
                <h3 class="text-lg font-semibold">{{ $item['title'] }}</h3>
                <span class="accordion-item__title-open" class="" x-show="!open">+</span>
                <span class="accordion-item__title-open" x-show="open">-</span>
            </div>
            <div class="accordion-item__body" x-show="open" x-transition style="display: none;">
                <p>{{ $item['content'] }}</p>
            </div>
        </div>
    @endforeach
</div>