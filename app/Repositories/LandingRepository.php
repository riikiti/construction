<?php

namespace App\Repositories;

use App\Models\Landing;

class LandingRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return Landing::query()->orderBy('sort')->get()->toArray();
    }
}