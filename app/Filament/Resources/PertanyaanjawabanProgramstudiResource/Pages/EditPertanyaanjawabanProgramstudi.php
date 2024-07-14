<?php

namespace App\Filament\Resources\PertanyaanjawabanProgramstudiResource\Pages;

use App\Filament\Resources\PertanyaanjawabanProgramstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPertanyaanjawabanProgramstudi extends EditRecord
{
    protected static string $resource = PertanyaanjawabanProgramstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
