FROM php:7.1-fpm-alpine

RUN cd /usr/local/bin && curl -sS https://getcomposer.org/installer | php
RUN cd /usr/local/bin && mv composer.phar composer

VOLUME ["/var/www"]

RUN apk update
RUN apk add --no-cache git zlib icu icu-libs icu-dev libmcrypt-dev freetype \
    libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev g++
RUN docker-php-ext-configure intl
RUN docker-php-ext-install iconv mcrypt gd pdo pdo_mysql intl

RUN composer config -g github-oauth.github.com 01e5fb6eeb7416a2daf1ccb9b6300cba156db2b4
RUN composer global require "fxp/composer-asset-plugin:~1.4.6"

RUN touch /var/log/cron.log
CMD crond -b && php-fpm