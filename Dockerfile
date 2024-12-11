# Imagen base de PHP en Alpine
FROM php:8.0-fpm-alpine

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala dependencias del sistema y extensiones de PHP
RUN apk update && apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    libxml2-dev \
    libzip-dev \
    oniguruma-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    && rm -rf /var/cache/apk/*

# Clear cache
RUN rm -rf /var/lib/apk/lists/*

# Instala Composer 2.2 LTS compatible con PHP 7.0
RUN curl -sS https://getcomposer.org/installer | php -- --2.2 --install-dir=/usr/bin --filename=composer

# Ajusta los permisos de la carpeta de trabajo
RUN chown -R www-data:www-data /var/www/html && \
    chmod 755 /var/www/html

# Define el usuario por defecto como www-data
USER www-data
