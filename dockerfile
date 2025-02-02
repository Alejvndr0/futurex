# Usar una imagen base de PHP con Apache
FROM php:8.2-fpm

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install zip mbstring gd xml bcmath

# Instalar Composer
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Configurar permisos

RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
# Generar clave de aplicación y cachear configuraciones
RUN php artisan key:generate --force
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Exponer el puerto de Apache
EXPOSE 80


# Iniciar Apache
CMD ["apache2-foreground"]


