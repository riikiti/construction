<?php

namespace App\Filament\Resources\AccordionResource;

use App\Models\Accordion;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AccordionResource extends Resource
{
    protected static ?string $model = Accordion::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationLabel = 'Часто задаваемые вопросы';
    protected static ?string $breadcrumb = 'Часто задаваемые вопросы';
    protected static ?string $navigationGroup = 'Контент';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        TextInput::make('title')->label('Заголовок'),
                        Textarea::make('description')->label('Описание')->maxLength(4096)->nullable(),
                        TextInput::make('sort')->label('Сортировка')->numeric()->default(1),
                        Toggle::make('is_active')->label('Показывать на сайте?')->default(true),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Заголовок')->searchable()->sortable(),
                TextColumn::make('description')->label('Описание')->searchable()->sortable()->formatStateUsing(
                    fn($state) => Str::limit($state, 15)
                ),
                TextColumn::make('sort')->label('Сортировка')->sortable(),
                ToggleColumn::make('is_active')->label('Показывать на сайте?'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccordions::route('/'),
            'create' => Pages\CreateAccordion::route('/create'),
            'edit' => Pages\EditAccordion::route('/{record}/edit'),
        ];
    }
}
