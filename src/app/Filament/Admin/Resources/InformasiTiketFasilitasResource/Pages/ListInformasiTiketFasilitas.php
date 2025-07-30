<?php

namespace App\Filament\Admin\Resources\InformasiTiketFasilitasResource\Pages;

use App\Filament\Admin\Resources\InformasiTiketFasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiTiketFasilitas extends ListRecords
{
    protected static string $resource = InformasiTiketFasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
