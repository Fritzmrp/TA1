<?php

namespace App\Filament\Resources\PertanyaanJawabanResource\Pages;

use App\Filament\Resources\PertanyaanJawabanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPertanyaanJawabans extends ListRecords
{
    protected static string $resource = PertanyaanJawabanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
