<?php
namespace App\Filament\Resources\Portfolios\Schemas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class PortfolioForm {
    public static function configure(Schema $schema): Schema {
        return $schema->components([
            Section::make('Informasi Proyek')
                ->schema([
                    TextInput::make('title')
                        ->label('Nama Proyek')
                        ->required()
                        ->columnSpanFull()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($operation, $state, Set $set) {
                            if ($operation === 'create') {
                                $set('slug', Str::slug($state));
                            }
                        }),
                    TextInput::make('slug')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, Set $set) => $set('slug', Str::slug($state)))
                        ->helperText('Diisi otomatis dari nama proyek.')
                        ->unique(ignoreRecord: true),
                    Grid::make(3)->schema([
                        TextInput::make('client_name')
                            ->label('Nama Klien'),
                        TextInput::make('location')
                            ->label('Lokasi Proyek'),
                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Kontraktor & Renovasi' => 'Kontraktor & Renovasi',
                                'Keamanan'              => 'Keamanan',
                                'Kebersihan'            => 'Kebersihan',
                                'SDM & Outsourcing'     => 'SDM & Outsourcing',
                                'Desain Interior'       => 'Desain Interior',
                                'Perawatan Gedung'      => 'Perawatan Gedung',
                                'Lainnya'               => 'Lainnya',
                            ])
                            ->searchable(),
                    ]),
                    Textarea::make('description')
                        ->label('Deskripsi Proyek')
                        ->required()
                        ->rows(5)
                        ->columnSpanFull(),
                    Grid::make(2)->schema([
                        FileUpload::make('image')
                            ->label('Foto Utama Proyek')
                            ->image()
                            ->disk('public_images')
                            ->directory('')
                            ->visibility('public')
                            ->imagePreviewHeight('200')
                            ->maxSize(5120),
                        Grid::make(1)->schema([
                            DatePicker::make('completion_date')
                                ->label('Tanggal Selesai'),
                            Toggle::make('is_active')
                                ->label('Tampilkan')
                                ->default(true),
                        ])->columnSpan(1),
                    ]),
                ]),
        ]);
    }
}
