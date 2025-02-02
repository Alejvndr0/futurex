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

#!/usr/bin/env bash
set -eux

# Instalar PHP 8.1
if ! command -v php8.1 &> /dev/null
then
    sudo apt update
    sudo apt install -y php8.1 php8.1-cli php8.1-mbstring php8.1-xml php8.1-curl php8.1-zip php8.1-bcmath php8.1-tokenizer php8.1-mysql
fi

# Usar PHP 8.1 como predeterminado
sudo update-alternatives --set php /usr/bin/php8.1

# Ejecutar el build

yarn install
yarn build
