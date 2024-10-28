<?php

namespace App\Filament\Resources\TopikSkripsiResource\Pages;

use App\Filament\Resources\TopikSkripsiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopikSkripsi extends EditRecord
{
    protected static string $resource = TopikSkripsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
