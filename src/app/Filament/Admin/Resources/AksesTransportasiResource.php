<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AksesTransportasiResource\Pages;
use App\Filament\Admin\Resources\AksesTransportasiResource\RelationManagers;
use App\Models\AksesTransportasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AksesTransportasiResource extends Resource
{
    protected static ?string $model = AksesTransportasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_tempat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rute')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('jenis_kendaraan')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('informasi_sewa')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_tempat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rute')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kendaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAksesTransportasis::route('/'),
            'create' => Pages\CreateAksesTransportasi::route('/create'),
            'edit' => Pages\EditAksesTransportasi::route('/{record}/edit'),
        ];
    }
}
