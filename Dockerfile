# Dockerfile

FROM php:8.3-fpm

# Node.js va npm ni o'rnatish uchun kerakli kutubxonalarni qo'shing
RUN apt-get update && apt-get install -y \
    curl \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest  # npm ni yangilang

# Tizim kutubxonalarini o'rnatish
RUN apt-get install -y \
    git \
    zip \
    unzip \
    libpq-dev \
    libonig-dev \
    libpng-dev \
    libcurl4-openssl-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_pgsql

# Composer ni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www


