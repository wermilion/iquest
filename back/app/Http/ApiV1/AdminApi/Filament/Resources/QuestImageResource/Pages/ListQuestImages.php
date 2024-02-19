<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\QuestImageResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\QuestImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuestImages extends ListRecords
{
    protected static string $resource = QuestImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
