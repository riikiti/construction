<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\SubHeaderAction;
use Livewire\Component;

class SubHeader extends Component
{
    public array $subHeader;

    public function render()
    {
        $this->subHeader = (new SubHeaderAction())->execute();
        return view('livewire.sub-header');
    }
}
