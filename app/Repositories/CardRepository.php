<?php

namespace App\Repositories;


use App\Models\Card;

class CardRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return Card::query()->orderBy('sort')->get()->toArray();
    }
}