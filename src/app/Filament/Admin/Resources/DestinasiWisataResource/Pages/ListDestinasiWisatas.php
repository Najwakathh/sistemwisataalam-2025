<?php

namespace App\Filament\Admin\Resources\DestinasiWisataResource\Pages;

use App\Filament\Admin\Resources\DestinasiWisataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDestinasiWisatas extends ListRecords
{
    protected static string $resource = DestinasiWisataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
