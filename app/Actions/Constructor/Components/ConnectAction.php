<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Actions\Constructor\StoreActionInterface;
use App\Repositories\AccordionRepository;
use App\Repositories\ConnectRepository;

class ConnectAction implements StoreActionInterface
{
    private ConnectRepository $connectRepository;

    public function __construct()
    {
        $this->connectRepository = new ConnectRepository();
    }

    public function execute(array $data = null): void
    {
        $this->connectRepository->storeConnect($data);
    }
}