<?php

namespace App\Filament\Resources\AgendaResource\Pages;

use App\Filament\Resources\AgendaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgenda extends EditRecord
{
    protected static string $resource = AgendaResource::class;


    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getBreadcrumbs(): array
    {
        return [
            'Agenda',
            'Ubah Agenda'
        ];
    }
}
