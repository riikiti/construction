<div class="connect" id="{{ $name }}">
    <div class="connect-title">
        <h2 class="title title--2">{{ $title }}</h2>
    </div>

    <!-- Форма -->
    <form wire:submit.prevent="submit">
        <div>
            <label for="phone">Телефон</label>
            <input type="tel" id="phone" wire:model="phone" placeholder="Телефон">
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

        @error('contact') <div class="text-red-500">{{ $message }}</div> @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if ($isModalOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50">
            <div class="bg-white p-6 rounded shadow-lg text-center">
                <h2 class="text-lg font-bold mb-4">Спасибо за вашу заявку!</h2>
                <p class="mb-4">Мы свяжемся с вами в ближайшее время.</p>
                <button wire:click="closeModal" class="px-4 py-2 bg-blue-500 text-white rounded">Закрыть</button>
            </div>
        </div>
    @endif
</div>
