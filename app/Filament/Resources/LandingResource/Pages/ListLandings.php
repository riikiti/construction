<?php

namespace App\Filament\Resources\LandingResource\Pages;

use App\Filament\Resources\LandingResource\LandingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandings extends ListRecords
{
    protected static string $resource = LandingResource::class;
    protected static ?string $title = 'Структура сайта';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
