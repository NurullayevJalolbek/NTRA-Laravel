FROM php:8.3-fpm

WORKDIR /var/www
# Tizim kutubxonalarini o'rnatish
RUN apt-get update && apt-get install -y \
    git \
    curl \
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

# Fayl huquqlarini o'rnatish
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Barcha kerakli PHP kengaytmalarini o'rnatish (masalan, mbstring, xml)
RUN docker-php-ext-install mbstring xml  # Qo'shimcha PHP kengaytmalari
