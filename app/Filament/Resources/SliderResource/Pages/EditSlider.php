<?php

namespace App\Filament\Resources\SliderResource\Pages;

use App\Filament\Resources\SliderResource\SliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSlider extends EditRecord
{
    protected static string $resource = SliderResource::class;
    protected static ?string $title = 'Слайдер';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
