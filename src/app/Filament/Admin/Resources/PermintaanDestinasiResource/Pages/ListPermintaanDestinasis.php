<?php

namespace App\Filament\Admin\Resources\PermintaanDestinasiResource\Pages;

use App\Filament\Admin\Resources\PermintaanDestinasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermintaanDestinasis extends ListRecords
{
    protected static string $resource = PermintaanDestinasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
