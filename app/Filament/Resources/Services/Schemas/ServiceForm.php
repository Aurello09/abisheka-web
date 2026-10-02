<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Layanan')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Set $set) {
                        if ($operation === 'create') {
                            $set('slug', Str::slug($state));
                        }
                    }),
                TextInput::make('slug')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, Set $set) => $set('slug', Str::slug($state)))
                    ->helperText('Slug diisi otomatis dari nama layanan. Bisa diedit manual.')
                    ->unique(ignoreRecord: true),
                Textarea::make('short_description')
                    ->label('Deskripsi Singkat')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi Lengkap')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Gambar Layanan')
                    ->image()
                    ->disk('public_images')
                    ->directory('')
                    ->visibility('public')
                    ->imagePreviewHeight('200')
                    ->maxSize(5120),
                Toggle::make('is_active')
                    ->label('Tampilkan Layanan')
                    ->default(true)
                    ->required(),
            ]);
    }
}

