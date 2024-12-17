<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\CardAction;
use App\Enums\LandingEnum;
use Livewire\Component;

class Card extends Component
{
    public string $title;
    public string $name;
    public array $cards = [];

    public function mount($title = 'Наши преимущества'): void
    {
        $this->title = $title;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $this->name = LandingEnum::Card->name;
        $this->cards = (new CardAction())->execute();
        return view('livewire.card');
    }
}
