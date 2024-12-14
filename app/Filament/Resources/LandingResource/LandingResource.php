<?php

namespace App\Filament\Resources\LandingResource;

use App\Models\Landing;
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

class LandingResource extends Resource
{
    protected static ?string $model = Landing::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $navigationLabel = 'Структура сайта';
    protected static ?string $breadcrumb = 'Структура сайта';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        TextInput::make('name')->label('Служебное название')->disabled(),
                        Textarea::make('label')->label('Название блока')->maxLength(255)->nullable(),
                        Textarea::make('short_label')->label('Короткое название в шапке')->maxLength(255)->nullable(),
                        TextInput::make('sort')->label('Сортировка')->numeric()->default(1),
                        Toggle::make('is_active')->label('Показывать на сайте?')->default(true),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label')->label('Заголовок')->searchable()->sortable(),
                TextColumn::make('short_label')->label('Короткое название в шапке')->searchable()->sortable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLandings::route('/'),
            'create' => Pages\CreateLanding::route('/create'),
            'edit' => Pages\EditLanding::route('/{record}/edit'),
        ];
    }
}
