<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InformasiTiketFasilitasResource\Pages;
use App\Filament\Admin\Resources\InformasiTiketFasilitasResource\RelationManagers;
use App\Models\InformasiTiketFasilitas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiTiketFasilitasResource extends Resource
{
    protected static ?string $model = InformasiTiketFasilitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_tempat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga_tiket')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('jam_buka')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('jam_tutup')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('fasilitas')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kontak_pengelola')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_tempat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_tiket')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jam_buka')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jam_tutup')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kontak_pengelola')
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
            'index' => Pages\ListInformasiTiketFasilitas::route('/'),
            'create' => Pages\CreateInformasiTiketFasilitas::route('/create'),
            'edit' => Pages\EditInformasiTiketFasilitas::route('/{record}/edit'),
        ];
    }
}
