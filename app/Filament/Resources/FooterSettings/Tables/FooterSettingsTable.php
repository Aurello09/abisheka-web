<?php

namespace App\Filament\Resources\FooterSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FooterSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('whatsapp_number')
                    ->label('WhatsApp')
                    ->searchable()
                    ->copyable()
                    ->description(fn ($record) => 'Link: wa.me/' . $record->clean_whatsapp),

                TextColumn::make('phone')
                    ->label('Telepon Tampilan')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->placeholder('—'),

                TextColumn::make('operational_hours')
                    ->label('Jam Operasional')
                    ->limit(30),

                TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->actions([
                EditAction::make()->label('Ubah Pengaturan'),
            ])
            ->bulkActions([]);
    }
}
