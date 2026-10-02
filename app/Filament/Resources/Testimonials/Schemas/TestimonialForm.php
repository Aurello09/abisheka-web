<?php
namespace App\Filament\Resources\Testimonials\Schemas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
class TestimonialForm {
    public static function configure(Schema $schema): Schema {
        return $schema->components([
            TextInput::make('client_name')->label('Nama Klien')->required(),
            TextInput::make('company')->label('Perusahaan / Jabatan'),
            Textarea::make('message')->label('Testimoni / Pesan')->required()->rows(4),
            FileUpload::make('avatar')
                ->label('Foto (opsional)')
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
