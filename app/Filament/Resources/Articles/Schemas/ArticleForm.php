<?php
namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ArticleForm {
    public static function configure(Schema $schema): Schema {
        return $schema->components([
            Section::make('Konten Artikel')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('title')
                            ->label('Judul Artikel')
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
                            ->helperText('Diisi otomatis dari judul. Bisa diedit manual.')
                            ->unique(ignoreRecord: true),
                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Keamanan'          => 'Keamanan',
                                'Kebersihan'        => 'Kebersihan',
                                'SDM & Outsourcing' => 'SDM & Outsourcing',
                                'Kontraktor'        => 'Kontraktor',
                                'Manajemen'         => 'Manajemen',
                                'Berita Perusahaan' => 'Berita Perusahaan',
                                'Lainnya'           => 'Lainnya',
                            ])
                            ->searchable()
                            ->placeholder('Pilih kategori...'),
                    ]),
                    Textarea::make('excerpt')
                        ->label('Ringkasan / Excerpt')
                        ->helperText('Ditampilkan di kartu artikel. Jika kosong, otomatis diambil dari isi.')
                        ->rows(3),
                    RichEditor::make('content')
                        ->label('Isi Artikel')
                        ->required()
                        ->toolbarButtons([
                            'bold','italic','underline','strike',
                            'h2','h3','bulletList','orderedList',
                            'blockquote','link','undo','redo',
                        ]),
                    Grid::make(2)->schema([
                        FileUpload::make('image')
                            ->label('Gambar Cover')
                            ->image()
                            ->disk('public_images')
                            ->directory('')
                            ->visibility('public')
                            ->imagePreviewHeight('200')
                            ->maxSize(5120),
                        Grid::make(1)->schema([
                            DateTimePicker::make('published_at')
                                ->label('Tanggal Terbit')
                                ->helperText('Kosongkan untuk menggunakan tanggal sekarang.')
                                ->nullable(),
                            Toggle::make('is_published')
                                ->label('Terbitkan')
                                ->default(true),
                        ])->columnSpan(1),
                    ]),
                ]),
        ]);
    }
}

