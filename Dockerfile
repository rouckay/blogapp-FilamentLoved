FROM php:7.4-fpm

WORKDIR /var/www/BLogAPP

COPY . .

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
