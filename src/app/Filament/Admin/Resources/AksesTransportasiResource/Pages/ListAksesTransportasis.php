<?php

namespace App\Filament\Admin\Resources\AksesTransportasiResource\Pages;

use App\Filament\Admin\Resources\AksesTransportasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAksesTransportasis extends ListRecords
{
    protected static string $resource = AksesTransportasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
