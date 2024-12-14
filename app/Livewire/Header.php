<?php

namespace App\Livewire;

use App\Actions\Constructor\LandingAction;
use Livewire\Component;

class Header extends Component
{
    public array $sections = [];

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $this->sections = (new LandingAction())->execute();
        return view('livewire.header');
    }
}
