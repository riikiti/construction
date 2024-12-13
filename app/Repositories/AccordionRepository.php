<?php

namespace App\Repositories;

use App\Models\Accordion;

class AccordionRepository implements RepositoryInterface
{

    public function getFirstAccordion(): array
    {
        return Accordion::query()->with('items')->first()->toArray();
    }
}