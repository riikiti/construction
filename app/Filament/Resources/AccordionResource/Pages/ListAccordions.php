<?php

namespace App\Filament\Resources\AccordionResource\Pages;

use App\Filament\Resources\AccordionResource\AccordionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccordions extends ListRecords
{
    protected static string $resource = AccordionResource::class;
    protected static ?string $title = 'Часто задаваемые вопросы';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
