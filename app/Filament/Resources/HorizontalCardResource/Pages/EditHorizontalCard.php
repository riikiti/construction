<?php

namespace App\Filament\Resources\HorizontalCardResource\Pages;

use App\Filament\Resources\HorizontalCardResource\HorizontalCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHorizontalCard extends EditRecord
{
    protected static string $resource = HorizontalCardResource::class;
    protected static ?string $title = 'О нас';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
