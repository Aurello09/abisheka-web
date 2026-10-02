<?php
namespace App\Filament\Resources\Testimonials\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
class TestimonialsTable {
    public static function configure(Table $table): Table {
        return $table->columns([
            ImageColumn::make('avatar')->disk('public_images'),
            TextColumn::make('client_name')->searchable(),
            TextColumn::make('company')->searchable(),
            IconColumn::make('is_active')->boolean(),
        ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
