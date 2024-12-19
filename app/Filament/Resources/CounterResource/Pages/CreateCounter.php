<?php

namespace App\Filament\Resources\CounterResource\Pages;

use App\Filament\Resources\CounterResource\CounterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCounter extends CreateRecord
{
    protected static string $resource = CounterResource::class;
    protected static ?string $title = 'Цифры';
}
