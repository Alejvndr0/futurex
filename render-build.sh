#!/bin/bash
# render-build.sh

# Instala dependencias de Composer
composer install --no-dev --optimize-autoloader

# Genera la clave de la aplicación (si no está configurada)
php artisan key:generate --force

# Optimiza la aplicación para producción
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache