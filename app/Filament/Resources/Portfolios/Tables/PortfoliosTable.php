<?php
namespace App\Filament\Resources\Portfolios\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
class PortfoliosTable {
    public static function configure(Table $table): Table {
        return $table->columns([
            ImageColumn::make('image')->disk('public_images'),
            TextColumn::make('title')->searchable(),
            TextColumn::make('completion_date')->date(),
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
