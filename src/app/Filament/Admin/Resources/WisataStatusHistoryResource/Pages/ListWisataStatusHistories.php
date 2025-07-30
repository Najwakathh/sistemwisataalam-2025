<?php

namespace App\Filament\Admin\Resources\WisataStatusHistoryResource\Pages;

use App\Filament\Admin\Resources\WisataStatusHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWisataStatusHistories extends ListRecords
{
    protected static string $resource = WisataStatusHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
