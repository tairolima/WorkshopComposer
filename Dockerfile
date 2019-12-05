FROM php:7.4-fpm

RUN apt-get update

RUN apt-get install -y \
        git \
        libzip-dev \
        unzip \
        && docker-php-ext-install zip
