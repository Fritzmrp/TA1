<?php

namespace App\Filament\Resources\PertanyaanJawabanResource\Pages;

use App\Filament\Resources\PertanyaanJawabanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPertanyaanJawaban extends EditRecord
{
    protected static string $resource = PertanyaanJawabanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
