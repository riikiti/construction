<?php

namespace App\Repositories;

use App\Models\Counter;

class CounterRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return Counter::all()->toArray();
    }
}