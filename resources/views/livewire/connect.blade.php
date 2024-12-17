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

    <!-- Модалка -->
    <div x-data="{ showModal: false }" @formSubmitted.window="showModal = true">
        <!-- Затемненный фон -->
        <div
                x-show="showModal"
                x-transition
                class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50"
                style="display: none;"
        >
            <!-- Содержимое модалки -->
            <div class="bg-white p-6 rounded shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Форма успешно отправлена!</h2>
                <p>Спасибо за вашу заявку. Мы свяжемся с вами в ближайшее время.</p>
                <button
                        @click="showModal = false"
                        class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                >
                    Закрыть
                </button>
            </div>
        </div>
    </div>
</div>
