<?php

namespace App\Filament\Resources\AccordionResource\Pages;

use App\Filament\Resources\AccordionResource\AccordionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAccordion extends CreateRecord
{
    protected static string $resource = AccordionResource::class;
    protected static ?string $title = 'Часто задаваемые вопросы';
}
