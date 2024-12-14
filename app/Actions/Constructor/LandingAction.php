<?php

namespace App\Actions\Constructor;

use App\Repositories\LandingRepository;
use App\Repositories\RepositoryInterface;

class LandingAction implements ActionInterface
{
    public LandingRepository $landingRepository;

    public function __construct()
    {
        $this->landingRepository = new LandingRepository();
    }

    public function execute(): array
    {
        return $this->landingRepository->getItems();
    }
}