FROM php:7-fpm

WORKDIR /opt/server

RUN apt-get update
RUN apt-get install -y \
    libssl-dev curl git

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

RUN curl -s https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

COPY composer.json .
COPY composer.lock .

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install

COPY . .

CMD php -S 0.0.0.0:8000
