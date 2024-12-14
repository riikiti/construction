<?php

namespace App\Repositories;

use App\Models\Slider;

class SliderRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return Slider::all()->toArray();
    }
}