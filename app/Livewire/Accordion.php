<?php

namespace App\Livewire;

use App\Actions\Constructor\AccordionAction;
use League\CommonMark\Util\ArrayCollection;
use Livewire\Component;

class Accordion extends Component
{
    public array $accordion = [];

    public function render()
    {
        $this->accordion = (new AccordionAction())->execute();
        return view('livewire.accordion');
    }
}
