<?php

namespace App\Filament\Resources\ConnectResource;

use App\Models\Connect;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
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
use Illuminate\Support\Str;

class ConnectResource extends Resource
{
    protected static ?string $model = Connect::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?string $navigationLabel = 'Заказы через сайт';
    protected static ?string $breadcrumb = 'Заказы через сайт';
    protected static ?int $navigationSort = 3;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tg')->label('Телеграм')->searchable()->sortable(),
                TextColumn::make('phone')->label('Телефон')->searchable()->sortable(),
                TextColumn::make('comment')->label('Комментарий')->searchable()->formatStateUsing(
                    fn($state) => Str::limit($state, 15)
                ),
                TextColumn::make('created_at')->label('Отправлена')->sortable()->dateTime('d.m.Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\Action::make('show')
                    ->modal()
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false)
                    ->label('Заказ')
                    ->modalContent(
                    fn(Connect $connect) => view('filament/connect-modal', ['connect' => $connect]),
                ),
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
            'index' => Pages\ListConnects::route('/'),
        ];
    }
}
