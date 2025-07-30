<?php

namespace App\Filament\Admin\Resources\EventAlamResource\Pages;

use App\Filament\Admin\Resources\EventAlamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventAlams extends ListRecords
{
    protected static string $resource = EventAlamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
