<?php

namespace App\Filament\Resources\FooterSettings\Pages;

use App\Filament\Resources\FooterSettings\FooterSettingResource;
use App\Models\SiteSetting;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFooterSettings extends ListRecords
{
    protected static string $resource = FooterSettingResource::class;

    public function mount(): void
    {
        SiteSetting::current();
        parent::mount();
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->visible(fn () => SiteSetting::count() === 0),
        ];
    }
}
