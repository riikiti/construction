<?php

namespace App\Filament\Resources\LogoResource;

use App\Models\Logo;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LogoResource extends Resource
{
    protected static ?string $model = Logo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Логотип';
    protected static ?string $breadcrumb = 'Логотип';
    protected static ?string $navigationGroup = 'Контент';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        Textarea::make('text_logo')->label('Текстовый логотип')->maxLength(255)->nullable(),
                        FileUpload::make('image_logo')
                            ->label('Логотип картинкой')
                            ->directory('logo-image')
                            ->disk('public'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_logo')->label('Логотип картинкой')->disk('public'),
                TextColumn::make('text_logo')->label('Текстовый логотип')->sortable(),
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
            'index' => Pages\ListLogos::route('/'),
            'edit' => Pages\EditLogo::route('/{record}/edit'),
        ];
    }
}
