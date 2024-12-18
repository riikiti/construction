<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Repositories\AccordionRepository;
use App\Repositories\SliderRepository;
use App\Repositories\SubHeaderRepository;

class SubHeaderAction implements ActionInterface
{
    private SubHeaderRepository $subHeaderRepository;

    public function __construct()
    {
        $this->subHeaderRepository = new SubHeaderRepository();
    }

    public function execute(): array
    {
        $subHeader = $this->subHeaderRepository->getItems();

        $newSubheader['image'] = 'storage/' . $subHeader['image'];
        $newSubheader['title'] = $subHeader['title'];
        $newSubheader['description'] = $subHeader['description'];
        $newSubheader['is_active'] = $subHeader['is_active'];

        return $newSubheader;
    }
}