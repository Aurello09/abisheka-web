<?php
$files = glob("app/Filament/Resources/*/Tables/*Table.php");
foreach($files as $file) {
    $content = file_get_contents($file);
    
    // Replace bad imports
    $content = preg_replace('/use Filament\\\\Actions\\\\([^;]+);/', 'use Filament\Tables\Actions\\\$1;', $content);
    
    // Add missing imports
    if (strpos($content, 'use Filament\Tables\Actions\EditAction;') === false) {
        $content = str_replace('use Filament\Tables\Table;', "use Filament\Tables\Table;\nuse Filament\Tables\Actions\EditAction;\nuse Filament\Tables\Actions\DeleteAction;\nuse Filament\Tables\Actions\BulkActionGroup;\nuse Filament\Tables\Actions\DeleteBulkAction;", $content);
    }
    
    // Fix recordActions -> actions and toolbarActions -> bulkActions
    $content = str_replace('->recordActions([', '->actions([', $content);
    $content = str_replace('->toolbarActions([', '->bulkActions([', $content);
    
    // If actions are entirely missing (like Portfolios, Clients, Testimonials)
    if (strpos($content, '->actions([') === false) {
        // Add them right before ]); or at the end of columns array somehow.
        // Actually, the structure is usually:
        // return $table->columns([...]);
        // Let's replace the last ");" with "])->actions([ EditAction::make(), DeleteAction::make() ])->bulkActions([ BulkActionGroup::make([ DeleteBulkAction::make() ]) ]);"
        
        $content = preg_replace('/\]\);/', "])\n            ->actions([\n                EditAction::make(),\n                DeleteAction::make(),\n            ])\n            ->bulkActions([\n                BulkActionGroup::make([\n                    DeleteBulkAction::make(),\n                ]),\n            ]);", $content, 1);
    }
    
    file_put_contents($file, $content);
    echo "Fixed: $file\n";
}
