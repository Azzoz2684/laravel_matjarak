#!/bin/bash

# Script to automatically extract laravel.zip
# Usage: ./extract-zip.sh

echo "====================================="
echo "Laravel ZIP Extraction Script"
echo "====================================="
echo ""

ZIP_FILE="./laravel.zip"

if [ ! -f "$ZIP_FILE" ]; then
    echo "❌ Error: laravel.zip not found in current directory"
    exit 1
fi

echo "📦 Found laravel.zip"
echo "📂 Extracting files..."
echo ""

# Extract the zip file
unzip -q "$ZIP_FILE" -d "./"

if [ $? -eq 0 ]; then
    echo "✅ Extraction completed successfully!"
    echo ""
    echo "📝 Extracted files from: $ZIP_FILE"
    echo ""
    echo "🚀 Next steps:"
    echo "   1. composer install"
    echo "   2. cp .env.example .env"
    echo "   3. php artisan key:generate"
    echo "   4. php artisan migrate"
    echo "   5. php artisan serve"
    echo ""
else
    echo "❌ Error: Failed to extract laravel.zip"
    exit 1
fi
