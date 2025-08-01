<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PermintaanDestinasiResource\Pages;
use App\Filament\Admin\Resources\PermintaanDestinasiResource\RelationManagers;
use App\Models\PermintaanDestinasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PermintaanDestinasiResource extends Resource
{
    protected static ?string $model = PermintaanDestinasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_user')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasi_preferensi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_wisata')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('catatan_opsional')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_user')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_preferensi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_wisata')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListPermintaanDestinasis::route('/'),
            'create' => Pages\CreatePermintaanDestinasi::route('/create'),
            'edit' => Pages\EditPermintaanDestinasi::route('/{record}/edit'),
        ];
    }
}
