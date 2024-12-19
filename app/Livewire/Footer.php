<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public array $logo;

    public function mount(array $logo): void
    {
        $this->logo = $logo;
    }

    public function scrollToTop()
    {
        $this->dispatchBrowserEvent('scroll-to-top');
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
