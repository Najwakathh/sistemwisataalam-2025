<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UlasanPengunjungResource\Pages;
use App\Filament\Admin\Resources\UlasanPengunjungResource\RelationManagers;
use App\Models\UlasanPengunjung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UlasanPengunjungResource extends Resource
{
    protected static ?string $model = UlasanPengunjung::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_pengunjung')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('destinasi_wisata')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Textarea::make('komentar')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pengunjung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destinasi_wisata')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListUlasanPengunjungs::route('/'),
            'create' => Pages\CreateUlasanPengunjung::route('/create'),
            'edit' => Pages\EditUlasanPengunjung::route('/{record}/edit'),
        ];
    }
}
