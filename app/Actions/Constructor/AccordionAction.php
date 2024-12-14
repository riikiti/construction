<?php

namespace App\Actions\Constructor;

use App\Repositories\AccordionRepository;

class AccordionAction implements ActionInterface
{
    private AccordionRepository $accordionRepository;

    public function __construct()
    {
        $this->accordionRepository = new AccordionRepository();
    }

    public function execute(): array
    {
        return $this->accordionRepository->getAccordionItems();
    }
}