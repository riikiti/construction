<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Repositories\AccordionRepository;
use App\Repositories\SliderRepository;

class SliderAction implements ActionInterface
{
    private SliderRepository $sliderRepository;

    public function __construct()
    {
        $this->sliderRepository = new SliderRepository();
    }

    public function execute(): array
    {
        $slides = $this->sliderRepository->getItems();
        $newSlides = [];
        foreach ($slides as $slide) {
            $newSlide['image'] = 'storage/' . $slide['image'];
            $newSlide['title'] = $slide['title'];
            $newSlide['description'] = $slide['description'];
            $newSlide['sort'] = $slide['sort'];
            $newSlide['is_active'] = $slide['is_active'];
            $newSlides[] = $newSlide;
        }
        return $newSlides;
    }
}