<?php

namespace App\Filament\Resources\CardResource\Pages;

use App\Filament\Resources\CardResource\CardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCards extends ListRecords
{
    protected static string $resource = CardResource::class;
    protected static ?string $title = 'Карточки';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
