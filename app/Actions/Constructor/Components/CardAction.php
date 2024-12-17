<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Repositories\AccordionRepository;
use App\Repositories\CardRepository;

class CardAction implements ActionInterface
{
    private CardRepository $cardRepository;

    public function __construct()
    {
        $this->cardRepository = new CardRepository();
    }

    public function execute(): array
    {
        $cards = $this->cardRepository->getItems();
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