<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DestinasiWisataResource\Pages;
use App\Filament\Admin\Resources\DestinasiWisataResource\RelationManagers;
use App\Models\DestinasiWisata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinasiWisataResource extends Resource
{
    protected static ?string $model = DestinasiWisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('lokasi')
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
                Forms\Components\TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->visibility('public')
                    ->imagePreviewHeight('150')
                    ->enableOpen()
                    ->enableDownload()
                    ->required(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_tiket')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jam_buka')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jam_tutup')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('public')
                    ->height(80)
                    ->label('Foto'),
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
            'index' => Pages\ListDestinasiWisatas::route('/'),
            'create' => Pages\CreateDestinasiWisata::route('/create'),
            'edit' => Pages\EditDestinasiWisata::route('/{record}/edit'),
        ];
    }
}
