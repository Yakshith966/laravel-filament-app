<?php

namespace App\Filament\Resources\ShowTeamPageResource\Pages;

use App\Filament\Resources\ShowTeamPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowTeamPages extends ListRecords
{
    protected static string $resource = ShowTeamPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
