<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\ConnectAction;
use App\Enums\LandingEnum;
use Livewire\Component;

class Connect extends Component
{
    public string $phone;
    public string $telegram;
    public string $comment;

    public string $title;
    public string $name;

    private ConnectAction $connectAction;

    protected $rules = [
        'comment' => 'required|string|max:1024',
    ];

    public function __construct()
    {
        $this->connectAction = new ConnectAction();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        if (empty($this->phone) && empty($this->telegram)) {
            $this->addError(
                'contact',
                'Вам необходимо указать либо номер телефона, либо имя пользователя Telegram.'
            );
            return;
        }
        $this->connectAction->execute([
            'phone' => $this->phone ?? null,
            'tg' => $this->telegram ?? null,
            'comment' => $this->comment,
        ]);

        $this->reset();

        $this->dispatch('formSubmitted');
    }

    public function mount($title = 'Наши преимущества'): void
    {
        $this->title = $title;
    }

    public function render()
    {
        $this->name = LandingEnum::Connect->name;
        return view('livewire.connect');
    }
}
