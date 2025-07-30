<?php

namespace App\Filament\Admin\Resources\ArtikelWisataResource\Pages;

use App\Filament\Admin\Resources\ArtikelWisataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtikelWisata extends EditRecord
{
    protected static string $resource = ArtikelWisataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
