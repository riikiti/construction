<?php

namespace App\Repositories;

use App\Models\Accordion;
use App\Models\Logo;

class LogoRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return Logo::first()->toArray();
    }
}