<?php
namespace App\Filament\Resources\Clients\Schemas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
class ClientForm {
    public static function configure(Schema $schema): Schema {
        return $schema->components([
            TextInput::make('name')->label('Nama Klien/Mitra')->required(),
            FileUpload::make('logo')
                ->label('Logo')
                ->image()
                ->disk('public_images')
                ->directory('')
                ->visibility('public')
                ->imagePreviewHeight('150')
                ->maxSize(2048),
            Toggle::make('is_active')->label('Tampilkan')->default(true),
        ]);
    }
}
