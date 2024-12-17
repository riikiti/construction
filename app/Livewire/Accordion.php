<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\AccordionAction;
use App\Enums\LandingEnum;
use Livewire\Component;

class Accordion extends Component
{
    public array $accordion = [];
    public string $title;
    public string $name;

    public function mount(string $title = 'Часто задаваемые вопросы'): void
    {
        $this->title = $title;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $this->accordion = (new AccordionAction())->execute();
        $this->name = LandingEnum::Accordion->name;
        return view('livewire.accordion');
    }
}
