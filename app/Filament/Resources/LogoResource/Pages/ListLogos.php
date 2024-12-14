<?php

namespace App\Filament\Resources\LogoResource\Pages;

use App\Filament\Resources\LogoResource\LogoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogos extends ListRecords
{
    protected static string $resource = LogoResource::class;
    protected static ?string $title = 'Логотип';
}
