<?php

namespace App\Filament\Resources\ConnectResource\Pages;

use App\Filament\Resources\ConnectResource\ConnectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConnects extends ListRecords
{
    protected static string $resource = ConnectResource::class;
    protected static ?string $title = 'Заказы через сайт';


}
