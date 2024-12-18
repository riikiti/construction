<?php

namespace App\Repositories;

use App\Models\HorizontalCard;
use App\Models\Slider;

class HorizontalCardRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return HorizontalCard::all()->toArray();
    }
}