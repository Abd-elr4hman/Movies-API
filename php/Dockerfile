# Dockerfile
FROM php:8.1.21RC1-fpm-bookworm

RUN apt-get update && apt-get install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# WORKDIR /var/www/project

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/project
COPY ./movies /var/www/project


ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer install

# EXPOSE 8000
#CMD php bin/console server:run 0.0.0.0:8000

# CMD symfony server:start