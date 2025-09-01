FROM php:8.1-fpm-alpine

RUN apk add --no-cache $PHPIZE_DEPS libzip bash vim libzip-dev oniguruma-dev linux-headers \
    && pecl install xdebug \
    && docker-php-ext-install zip \
    && docker-php-ext-install mbstring \
    && docker-php-ext-enable xdebug \
    && apk del $PHPIZE_DEPS libzip-dev oniguruma-dev linux-headers
    && echo "short_open_tag=Off" > /usr/local/etc/php/conf.d/99-short-open-tag.ini

WORKDIR /var/www/html

EXPOSE 9000 9003