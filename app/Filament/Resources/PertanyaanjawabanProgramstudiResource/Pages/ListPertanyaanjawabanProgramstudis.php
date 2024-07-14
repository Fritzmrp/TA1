<?php

namespace App\Filament\Resources\PertanyaanjawabanProgramstudiResource\Pages;

use App\Filament\Resources\PertanyaanjawabanProgramstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPertanyaanjawabanProgramstudis extends ListRecords
{
    protected static string $resource = PertanyaanjawabanProgramstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
