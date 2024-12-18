<?php

namespace App\Filament\Resources\HorizontalCardResource\Pages;

use App\Filament\Resources\HorizontalCardResource\HorizontalCardResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHorizontalCard extends CreateRecord
{
    protected static string $resource = HorizontalCardResource::class;
    protected static ?string $title = 'О нас';
}
