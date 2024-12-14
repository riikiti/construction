<?php

namespace App\Repositories;

use App\Models\Accordion;

class AccordionRepository implements RepositoryInterface
{

    public function getItems(): array
    {
        return Accordion::all()->toArray();
    }
}