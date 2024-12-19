<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\CounterAction;
use App\Enums\LandingEnum;
use Livewire\Component;

class Counter extends Component
{
    public array $counters;
    public string $title;
    public string $name;

    public function mount($title = 'Цифры'): void
    {
        $this->title = $title;
    }
    public function render()
    {
        $this->name = LandingEnum::Counter->name;
        $this->counters = (new CounterAction())->execute();
        return view('livewire.counter');
    }
}
