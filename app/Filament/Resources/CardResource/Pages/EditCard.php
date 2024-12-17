<?php

namespace App\Filament\Resources\CardResource\Pages;

use App\Filament\Resources\CardResource\CardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCard extends EditRecord
{
    protected static string $resource = CardResource::class;
    protected static ?string $title = 'Карточки';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
