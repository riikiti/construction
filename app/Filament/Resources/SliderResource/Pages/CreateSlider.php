<?php

namespace App\Filament\Resources\SliderResource\Pages;

use App\Filament\Resources\SliderResource\SliderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSlider extends CreateRecord
{
    protected static string $resource = SliderResource::class;
    protected static ?string $title = 'Слайдер';
}
