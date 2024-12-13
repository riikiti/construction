<?php

namespace App\Repositories;

use App\Models\Accordion;

interface RepositoryInterface
{
    public function getFirstAccordion(): array;
}