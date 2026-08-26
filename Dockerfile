FROM php:8.1-apache

# ============================================================
# Dependencias del sistema
# ============================================================

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    bash \
    && rm -rf /var/lib/apt/lists/*


# ============================================================
# Extensiones PHP necesarias para Laravel
# ============================================================

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring


# ============================================================
# Apache
# ============================================================

RUN a2enmod rewrite


# ============================================================
# Composer
# ============================================================

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer


# ============================================================
# Directorio de trabajo
# ============================================================

WORKDIR /var/www/html


# ============================================================
# Copiar aplicación Laravel
# ============================================================

COPY src/gascontrol/ .


# ============================================================
# DEBUG: comprobar storage inmediatamente después del COPY
# ============================================================

RUN echo "===== STORAGE BEFORE =====" \
    && ls -la /var/www/html/storage \
    && echo "===== LOGS BEFORE =====" \
    && ls -la /var/www/html/storage/logs || true


# ============================================================
# Instalar dependencias Laravel
# ============================================================

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction


# ============================================================
# Crear directorios necesarios de Laravel
# ============================================================

RUN mkdir -p \
    /var/www/html/storage/logs \
    /var/www/html/storage/framework/cache \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/bootstrap/cache


# ============================================================
# Propietario de archivos escribibles
# ============================================================

RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache


# ============================================================
# Permisos de escritura
# ============================================================

RUN chmod -R 777 \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache


# ============================================================
# DEBUG: comprobar permisos después de chown/chmod
# ============================================================

RUN echo "===== STORAGE AFTER =====" \
    && ls -ld /var/www/html/storage \
    && ls -ld /var/www/html/storage/logs \
    && ls -la /var/www/html/storage/logs \
    && echo "===== BOOTSTRAP CACHE =====" \
    && ls -ld /var/www/html/bootstrap/cache


# ============================================================
# DEBUG: comprobar que www-data puede escribir
# ============================================================

RUN su -s /bin/bash www-data -c \
    "touch /var/www/html/storage/logs/test-www-data.log"


# ============================================================
# Configuración de Apache
# ============================================================

# Apache escuchará en el puerto 9000
RUN sed -i 's/Listen 80/Listen 9000/' \
    /etc/apache2/ports.conf


# VirtualHost en puerto 9000
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:9000>/' \
    /etc/apache2/sites-available/000-default.conf


# Laravel debe servirse desde /public
RUN sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#' \
    /etc/apache2/sites-available/000-default.conf


# Permitir acceso al directorio public
RUN sed -i '/<VirtualHost \*:9000>/a \
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>' \
    /etc/apache2/sites-available/000-default.conf


# ============================================================
# Puerto
# ============================================================

EXPOSE 9000


# ============================================================
# Iniciar Apache
# ============================================================

CMD ["apache2-foreground"]
