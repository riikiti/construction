<?php

namespace App\Filament\Resources\CardResource\Pages;

use App\Filament\Resources\CardResource\CardResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCard extends CreateRecord
{
    protected static string $resource = CardResource::class;
    protected static ?string $title = 'Карточки';
}
