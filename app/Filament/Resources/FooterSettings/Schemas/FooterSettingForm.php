<?php

namespace App\Filament\Resources\FooterSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class FooterSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Kontak & WhatsApp')
                ->description('Pengaturan nomor WhatsApp, telepon, dan jam operasional yang tampil di footer, tombol floating WA, dan halaman kontak.')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('whatsapp_number')
                            ->label('Nomor WhatsApp (Tujuan Chat)')
                            ->required()
                            ->helperText('Gunakan angka dan kode negara (contoh: 6282233117485 tanpa tanda + atau spasi). Digunakan pada tombol WA.')
                            ->placeholder('6282233117485'),

                        TextInput::make('phone')
                            ->label('Nomor Telepon Tampilan')
                            ->required()
                            ->helperText('Teks nomor telepon yang tampil di web (contoh: 082-233-117-485).')
                            ->placeholder('082-233-117-485'),

                        TextInput::make('email')
                            ->label('Email Kantor / Perusahaan')
                            ->email()
                            ->placeholder('info@abisheka.com'),

                        TextInput::make('operational_hours')
                            ->label('Jam Operasional')
                            ->helperText('Contoh: Senin – Jumat, 08.00 – 17.00 WIB')
                            ->placeholder('Senin – Jumat, 08.00 – 17.00 WIB'),
                    ]),

                    Textarea::make('address')
                        ->label('Alamat Kantor Lengkap')
                        ->rows(3)
                        ->columnSpanFull()
                        ->helperText('Alamat yang ditampilkan pada bagian Kontak di footer.')
                        ->placeholder("Jl. Dr. Soetomo No. 59-61\nSurabaya, 60264"),
                ]),

            Section::make('Informasi Perusahaan & Teks Footer')
                ->description('Kelola teks profil singkat perusahaan dan afiliasi holding company pada footer.')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('company_name')
                            ->label('Nama Perusahaan')
                            ->required(),

                        TextInput::make('holding_name')
                            ->label('Nama Holding Company')
                            ->placeholder('PT Dharma Putra Airlangga'),

                        TextInput::make('holding_url')
                            ->label('Link Website Holding Company')
                            ->url()
                            ->placeholder('https://dpacorp.id/'),

                        TextInput::make('copyright_text')
                            ->label('Teks Hak Cipta')
                            ->placeholder('PT. Abisheka Bangun Sarana. Seluruh hak cipta dilindungi.'),
                    ]),

                    Textarea::make('footer_description')
                        ->label('Deskripsi Singkat Footer')
                        ->rows(3)
                        ->columnSpanFull()
                        ->helperText('Paragraf penjelasan profil perusahaan di bawah logo footer.'),
                ]),

            Section::make('Media Sosial')
                ->description('Link akun media sosial perusahaan.')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('instagram_url')
                            ->label('Link Instagram')
                            ->placeholder('https://instagram.com/...'),

                        TextInput::make('linkedin_url')
                            ->label('Link LinkedIn')
                            ->placeholder('https://linkedin.com/company/...'),
                    ]),
                ]),
        ]);
    }
}
