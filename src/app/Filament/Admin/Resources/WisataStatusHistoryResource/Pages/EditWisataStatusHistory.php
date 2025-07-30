<?php

namespace App\Filament\Admin\Resources\WisataStatusHistoryResource\Pages;

use App\Filament\Admin\Resources\WisataStatusHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWisataStatusHistory extends EditRecord
{
    protected static string $resource = WisataStatusHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
