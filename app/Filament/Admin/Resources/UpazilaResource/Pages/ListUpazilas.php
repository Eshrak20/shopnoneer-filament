<?php

namespace App\Filament\Admin\Resources\UpazilaResource\Pages;

use App\Filament\Admin\Resources\UpazilaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpazilas extends ListRecords
{
    protected static string $resource = UpazilaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
