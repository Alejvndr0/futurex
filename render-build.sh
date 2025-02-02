#!/bin/bash
set -eux  # Habilita error inmediato y modo detallado

# Instalar dependencias de Laravel
composer install --no-dev --optimize-autoloader

# Verificar si la clave de la aplicación ya existe
if ! grep -q "APP_KEY=" .env || [[ -z "$(grep APP_KEY .env | cut -d '=' -f2)" ]]; then
    php artisan key:generate --force
fi

# Optimización para producción
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Instalar dependencias de frontend y compilar assets si usa Vite/Webpack
if [ -f "package.json" ]; then
    yarn install --frozen-lockfile
    yarn build
fi

