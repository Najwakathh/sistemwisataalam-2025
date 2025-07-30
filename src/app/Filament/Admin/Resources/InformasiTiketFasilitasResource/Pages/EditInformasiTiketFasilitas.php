<?php

namespace App\Filament\Admin\Resources\InformasiTiketFasilitasResource\Pages;

use App\Filament\Admin\Resources\InformasiTiketFasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiTiketFasilitas extends EditRecord
{
    protected static string $resource = InformasiTiketFasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
