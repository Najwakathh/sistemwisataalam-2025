<?php

namespace App\Filament\Admin\Resources\UlasanPengunjungResource\Pages;

use App\Filament\Admin\Resources\UlasanPengunjungResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUlasanPengunjung extends EditRecord
{
    protected static string $resource = UlasanPengunjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
