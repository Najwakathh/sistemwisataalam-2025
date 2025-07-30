<?php

namespace App\Filament\Admin\Resources\UlasanPengunjungResource\Pages;

use App\Filament\Admin\Resources\UlasanPengunjungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUlasanPengunjungs extends ListRecords
{
    protected static string $resource = UlasanPengunjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
