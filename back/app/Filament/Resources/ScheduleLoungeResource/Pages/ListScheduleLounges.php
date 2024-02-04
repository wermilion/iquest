<?php

namespace App\Filament\Resources\ScheduleLoungeResource\Pages;

use App\Filament\Resources\ScheduleLoungeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScheduleLounges extends ListRecords
{
    protected static string $resource = ScheduleLoungeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
