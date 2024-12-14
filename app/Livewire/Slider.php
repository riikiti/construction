<?php

namespace App\Livewire;

use App\Actions\Constructor\Components\SliderAction;
use App\Enums\LandingEnum;
use Livewire\Component;

class Slider extends Component
{
    public array $slides = [];

    public int $currentSlide = 0;
    public string $title;
    public string $name;

    public function nextSlide(): void
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function prevSlide(): void
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function mount(string $title): void
    {
        $this->title = $title;
    }

    public function render(
    ): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $this->name = LandingEnum::Slider->name;
        $this->slides = (new SliderAction())->execute();
        return view('livewire.slider');
    }
}
