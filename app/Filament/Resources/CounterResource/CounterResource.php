<?php

namespace App\Filament\Resources\CounterResource;

use App\Models\Counter;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CounterResource extends Resource
{
    protected static ?string $model = Counter::class;

    protected static ?string $navigationIcon = 'heroicon-o-numbered-list';
    protected static ?string $navigationLabel = 'Цифры';
    protected static ?string $breadcrumb = 'Цифры';
    protected static ?string $navigationGroup = 'Контент';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        Textarea::make('title')->label('Название блока')->maxLength(255)->nullable(),
                        TextInput::make('number')->label('Число')->numeric()->default(1),
                        Textarea::make('prefix')->label('Добавление к числу')->maxLength(255)->nullable(),
                        TextInput::make('sort')->label('Сортировка')->numeric()->default(1),
                        Toggle::make('is_active')->label('Показывать на сайте?')->default(true),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Текст')->searchable()->sortable(),
                TextColumn::make('number')->label('Число')->searchable()->sortable(),
                TextColumn::make('prefix')->label('Добавление к числу')->searchable()->sortable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCounters::route('/'),
            'create' => Pages\CreateCounter::route('/create'),
            'edit' => Pages\EditCounter::route('/{record}/edit'),
        ];
    }
}
