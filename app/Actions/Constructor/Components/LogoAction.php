<?php

namespace App\Actions\Constructor\Components;

use App\Actions\Constructor\ActionInterface;
use App\Repositories\AccordionRepository;
use App\Repositories\LogoRepository;

class LogoAction implements ActionInterface
{
    private LogoRepository $logoRepository;

    public function __construct()
    {
        $this->logoRepository = new LogoRepository();
    }

    public function execute(): array
    {
        $logo = $this->logoRepository->getItems();

        return [
            'text_logo' => $logo['text_logo'],
            'image_logo' => !empty($logo['image_logo']) ? 'storage/' . $logo['image_logo'] : null
        ];
    }
}