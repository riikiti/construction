<?php

namespace App\Repositories;

use App\Models\Accordion;

class AccordionRepository implements RepositoryInterface
{

    public function getAccordionItems(): array
    {
        return Accordion::query()->get()->toArray();
    }
}