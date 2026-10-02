<?php
$files = glob("app/Filament/Resources/*/Tables/*Table.php");
foreach($files as $file) {
    $content = file_get_contents($file);
    
    // Replace Filament\Tables\Actions back to Filament\Actions
    $content = preg_replace('/use Filament\\\\Tables\\\\Actions\\\\([^;]+);/', 'use Filament\Actions\\\$1;', $content);
    
    file_put_contents($file, $content);
    echo "Reverted: $file\n";
}
