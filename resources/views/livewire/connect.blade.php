<div class="layout-content" id="{{ $name }}">
    <div class="connect">

        <div class="connect-content">
            <div class="connect-title">
                <h2 class="title title--2">{{ $title }}</h2>
            </div>
           <div class="connect-content__info">
               <a href="#">Telegram </a>
               <a href="#">Телефон </a>
               <a href="#">WhatsUp </a>
           </div>
            <h3 class="title title--3">Или оставьте завяку на сайте</h3>
            <form wire:submit.prevent="submit" class="connect-form">
                <div class="connect-form__item">
                    <label for="phone">Телефон :</label>
                    <input type="tel" id="phone" wire:model.lazy="phone" placeholder="Телефон">
                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="connect-form__item">
                    <label for="telegram">Telegram :</label>
                    <input type="text" id="telegram" wire:model="telegram" placeholder="Telegram">
                    @error('telegram') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="connect-form__item">
                    <label for="comment">Комментарий :</label>
                    <textarea id="comment" wire:model="comment" placeholder="Комментарий"></textarea>
                    @error('comment') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                @error('contact')
                <div class="text-red-500">{{ $message }}</div> @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        @if ($isModalOpen)
            <div>
                <div class="modal" wire:click="closeModal">
                    <div class="modal__content">
                        <h2 class="modal__title">Спасибо за вашу заявку!</h2>
                        <p class="modal__text">Мы свяжемся с вами в ближайшее время.</p>
                        <button wire:click="closeModal" class="modal__button">Закрыть</button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

