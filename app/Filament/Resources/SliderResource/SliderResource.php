<?php

namespace App\Filament\Resources\SliderResource;

use App\Models\Slider;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Слайдер';
    protected static ?string $breadcrumb = 'Слайдер';
    protected static ?string $navigationGroup = 'Контент';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        Textarea::make('title')->label('Название блока')->maxLength(255)->nullable(),
                        Textarea::make('description')->label('Описание')->maxLength(1024)->nullable(),
                        FileUpload::make('image')
                            ->label('Картинка')
                            ->directory('slider-image')
                            ->disk('public'),
                        TextInput::make('sort')->label('Сортировка')->numeric()->default(1),
                        Toggle::make('is_active')->label('Показывать на сайте?')->default(true),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Название блока')->searchable()->sortable(),
                TextColumn::make('description')->label('Описание')->searchable()->sortable()->formatStateUsing(
                    fn($state) => Str::limit($state, 15)
                ),
                ImageColumn::make('image')->label('Картинка')->disk('public'),
                TextColumn::make('sort')->label('Сортировка')->sortable(),
                ToggleColumn::make('is_active')->label('Показывать на сайте?'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
