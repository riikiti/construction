<div class="layout-content" id="{{ $name }}">
    <div class="connect">
        <div class="connect-title">
            <h2 class="title title--2">{{ $title }}</h2>
        </div>

        <!-- Форма -->
        <form wire:submit.prevent="submit">
            <div>
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" wire:model.lazy="phone" placeholder="Телефон">
                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="telegram">Telegram:</label>
                <input type="text" id="telegram" wire:model="telegram" placeholder="Telegram">
                @error('telegram') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="comment">Комментарий:</label>
                <textarea id="comment" wire:model="comment" placeholder="Комментарий"></textarea>
                @error('comment') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            @error('contact')
            <div class="text-red-500">{{ $message }}</div> @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

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

<script>
    document.addEventListener('livewire:load', () => {
        const phoneInput = document.getElementById('phone');

        if (phoneInput) {
            Inputmask({
                mask: '+7 (999) 999-99-99',
                placeholder: ' ',
                clearMaskOnLostFocus: true
            }).mask(phoneInput);
        }
    });

    document.addEventListener('livewire:input', () => {
        const phoneInput = document.getElementById('phone');

        if (phoneInput && !phoneInput.inputmask) {
            Inputmask({
                mask: '+7 (999) 999-99-99',
                placeholder: ' ',
                clearMaskOnLostFocus: true
            }).mask(phoneInput);
        }
    });
</script>
