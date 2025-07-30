<?php

namespace App\Filament\Admin\Resources\EventAlamResource\Pages;

use App\Filament\Admin\Resources\EventAlamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventAlam extends EditRecord
{
    protected static string $resource = EventAlamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
