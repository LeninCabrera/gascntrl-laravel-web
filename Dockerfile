FROM php:8.1-apache

# Dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Extensiones PHP necesarias para Laravel
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Instalar Composer compatible con PHP 8.1
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Copiar el proyecto Laravel
COPY src/gascontrol/ .

# Instalar dependencias de Laravel
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Crear las carpetas que Laravel necesita para escribir
RUN mkdir -p \
    /var/www/html/storage/logs \
    /var/www/html/storage/framework/cache \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/bootstrap/cache

# Dar propiedad a Apache/PHP (www-data)
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Permisos de lectura/escritura para Laravel
RUN chmod -R ug+rwX \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Mostrar permisos durante el build para comprobarlos
RUN ls -la /var/www/html/storage \
    && ls -la /var/www/html/storage/logs \
    && ls -ld /var/www/html/storage \
    /var/www/html/storage/logs \
    /var/www/html/bootstrap/cache

# Configurar Apache para escuchar en el puerto 9000
RUN sed -i 's/Listen 80/Listen 9000/' \
    /etc/apache2/ports.conf

# Configurar VirtualHost en puerto 9000
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:9000>/' \
    /etc/apache2/sites-available/000-default.conf

# Laravel debe servirse desde /public
RUN sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#' \
    /etc/apache2/sites-available/000-default.conf

# Permitir .htaccess y acceso al directorio público
RUN sed -i '/<VirtualHost \*:9000>/a \
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>' \
    /etc/apache2/sites-available/000-default.conf

# Puerto utilizado por AppSail
EXPOSE 9000

# Iniciar Apache
CMD ["apache2-foreground"]
