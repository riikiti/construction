<?php

namespace App\Repositories;

use App\Models\SubHeader;

class SubHeaderRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return SubHeader::first()->toArray();
    }
}