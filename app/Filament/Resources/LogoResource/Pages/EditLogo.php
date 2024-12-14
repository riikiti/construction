<?php

namespace App\Filament\Resources\LogoResource\Pages;

use App\Filament\Resources\LogoResource\LogoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogo extends EditRecord
{
    protected static string $resource = LogoResource::class;
    protected static ?string $title = 'Логотип';
}
