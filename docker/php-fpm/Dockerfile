FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
        git \
        zip \
        unzip \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN pecl install apcu redis \
        && docker-php-ext-enable apcu redis \
        && docker-php-ext-configure intl \
        && docker-php-ext-install intl pdo pdo_mysql opcache zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
&& composer --version

WORKDIR /var/www

CMD composer install --optimize-autoloader ; php-fpm

EXPOSE 9000