FROM php:7.4-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        zip \
        mbstring \
        bcmath \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer compatible con PHP 7.4
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar aplicación Laravel
COPY src/gascontrol/ .

# Instalar dependencias PHP
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# Configurar Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# Permisos Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Puerto Apache
EXPOSE 80

# Ejecutar Apache en foreground
CMD ["apache2-foreground"]
