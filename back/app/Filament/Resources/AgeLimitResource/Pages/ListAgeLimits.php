<?php

namespace App\Filament\Resources\AgeLimitResource\Pages;

use App\Filament\Resources\AgeLimitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAgeLimits extends ListRecords
{
    protected static string $resource = AgeLimitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
