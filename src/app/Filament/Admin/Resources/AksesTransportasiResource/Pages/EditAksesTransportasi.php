<?php

namespace App\Filament\Admin\Resources\AksesTransportasiResource\Pages;

use App\Filament\Admin\Resources\AksesTransportasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAksesTransportasi extends EditRecord
{
    protected static string $resource = AksesTransportasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
