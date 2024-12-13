<?php

namespace App\Livewire;

use Livewire\Component;

class Slider extends Component
{
    public $slides = [
        ['id' => 1, 'image' => 'storage/img/TLC-01-01.jpg', 'title' => 'Слайд 1', 'description' => 'Описание слайда 1'],
        ['id' => 2, 'image' => 'storage/img/TLC-01-02.jpg', 'title' => 'Слайд 2', 'description' => 'Описание слайда 2'],
        ['id' => 3, 'image' => 'storage/img/TLC-01-03 (PS).jpg', 'title' => 'Слайд 3', 'description' => 'Описание слайда 3'],
    ];

    public $currentSlide = 0;

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function render()
    {
        return view('livewire.slider');
    }
}
