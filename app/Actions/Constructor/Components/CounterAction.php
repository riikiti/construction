<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Repositories\CounterRepository;

class CounterAction implements ActionInterface
{
    private CounterRepository $counterRepository;

    public function __construct()
    {
        $this->counterRepository = new CounterRepository();
    }

    public function execute(): array
    {
        return $this->counterRepository->getItems();
    }
}