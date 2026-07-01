<?php

/**
 * Script to automatically extract laravel.zip file
 * This script will decompress the laravel.zip and place all files in the correct directories
 */

$zipFile = __DIR__ . '/laravel.zip';
$extractPath = __DIR__;

if (!file_exists($zipFile)) {
    echo "Error: laravel.zip not found in " . __DIR__ . "\n";
    exit(1);
}

echo "Starting extraction of laravel.zip...\n";
echo "Zip file: " . $zipFile . "\n";
echo "Extract to: " . $extractPath . "\n\n";

try {
    $zip = new ZipArchive();
    
    if ($zip->open($zipFile) === true) {
        echo "Zip file opened successfully!\n";
        echo "Total files in archive: " . $zip->numFiles . "\n\n";
        
        // Extract all files
        if ($zip->extractTo($extractPath)) {
            echo "✓ Extraction completed successfully!\n";
            echo "All files have been extracted to: " . $extractPath . "\n\n";
            
            // List extracted files
            echo "Extracted files and directories:\n";
            echo str_repeat("-", 50) . "\n";
            
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $filename = $zip->getNameIndex($i);
                echo "  ✓ " . $filename . "\n";
            }
            
            echo str_repeat("-", 50) . "\n";
            $zip->close();
            
            echo "\n✓ Process completed successfully!\n";
            echo "You can now use the Laravel application.\n";
            echo "\nNext steps:\n";
            echo "1. composer install\n";
            echo "2. cp .env.example .env\n";
            echo "3. php artisan key:generate\n";
            echo "4. php artisan migrate\n";
            echo "5. php artisan serve\n";
            
        } else {
            echo "Error: Failed to extract files from zip archive.\n";
            $zip->close();
            exit(1);
        }
    } else {
        echo "Error: Could not open laravel.zip file.\n";
        exit(1);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
