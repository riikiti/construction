<?php

namespace App\Filament\Resources\SubHeaderResource\Pages;

use App\Filament\Resources\SubHeaderResource\SubHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubHeader extends EditRecord
{
    protected static string $resource = SubHeaderResource::class;
    protected static ?string $title = 'Первый блок';

}
