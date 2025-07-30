<?php

namespace App\Filament\Admin\Resources\DestinasiWisataResource\Pages;

use App\Filament\Admin\Resources\DestinasiWisataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDestinasiWisata extends EditRecord
{
    protected static string $resource = DestinasiWisataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
