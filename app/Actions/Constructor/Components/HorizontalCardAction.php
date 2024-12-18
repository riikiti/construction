<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Repositories\AccordionRepository;
use App\Repositories\HorizontalCardRepository;
use App\Repositories\SliderRepository;

class HorizontalCardAction implements ActionInterface
{
    private HorizontalCardRepository $horizontalCardRepository;

    public function __construct()
    {
        $this->horizontalCardRepository = new HorizontalCardRepository();
    }

    public function execute(): array
    {
        $cards = $this->horizontalCardRepository->getItems();
        $newCards = [];
        foreach ($cards as $card) {
            $newCard['image'] = 'storage/' . $card['image'];
            $newCard['title'] = $card['title'];
            $newCard['description'] = $card['description'];
            $newCard['sort'] = $card['sort'];
            $newCard['is_active'] = $card['is_active'];
            $newCards[] = $newCard;
        }
        return $newCards;
    }
}