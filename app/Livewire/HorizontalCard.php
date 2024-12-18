<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\HorizontalCardAction;
use App\Enums\LandingEnum;
use Livewire\Component;

class HorizontalCard extends Component
{
    public array $cards = [];
    public string $title;
    public string $name;

    public function mount(string $title): void
    {
        $this->title = $title;
    }

    public function render()
    {
        $this->name = LandingEnum::HorizontalCards->name;
        $this->cards = (new HorizontalCardAction())->execute();
        return view('livewire.horizontal-card');
    }
}
