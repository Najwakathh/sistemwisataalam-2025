<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EventAlamResource\Pages;
use App\Models\EventAlam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;

class EventAlamResource extends Resource
{
    protected static ?string $model = EventAlam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_event')
                ->required()
                ->label('Nama Event'),
                
            Forms\Components\TextInput::make('lokasi')
                ->required(),
                
            Forms\Components\DatePicker::make('tanggal')
                ->required(),
                
            Forms\Components\Select::make('jenis_lokasi')
                ->required()
                ->options([
                    'Gunung' => 'Gunung',
                    'Hutan' => 'Hutan',
                    'Air Terjun' => 'Air Terjun',
                    'Danau' => 'Danau',
                    'Pantai' => 'Pantai',
                ]),
                
            Forms\Components\Textarea::make('deskripsi')
                ->columnSpanFull(),

            FileUpload::make('gambar')
                ->label('Upload Gambar')
                ->image()
                ->disk('public')
                ->visibility('public')
                ->imagePreviewHeight('150')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_event')->searchable()->label('Event'),
                Tables\Columns\TextColumn::make('lokasi')->searchable(),
                Tables\Columns\TextColumn::make('tanggal')->date()->sortable(),
                Tables\Columns\TextColumn::make('jenis_lokasi'),
                Tables\Columns\TextColumn::make('deskripsi')->limit(30)->wrap(),
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->height(60),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventAlams::route('/'),
            'create' => Pages\CreateEventAlam::route('/create'),
            'edit' => Pages\EditEventAlam::route('/{record}/edit'),
        ];
    }
}
