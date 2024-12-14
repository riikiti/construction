<?php

namespace App\Filament\Resources\LandingResource\Pages;

use App\Filament\Resources\LandingResource\LandingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLanding extends CreateRecord
{
    protected static string $resource = LandingResource::class;
    protected static ?string $title = 'Структура сайта';
}
