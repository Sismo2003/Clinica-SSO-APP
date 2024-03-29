FROM php:8.2-apache
RUN apt-get update
RUN apt-get -y install git
RUN docker-php-source extract \
        # do important things \
        && docker-php-source delete


RUN apt-get update && apt-get install -y \
    zip \
    libzip-dev

ENV LIBZIP_CFLAGS="-I/usr/include"
ENV LIBZIP_LIBS="-L/usr/lib -lzip"

RUN docker-php-ext-install zip

RUN curl -sSL https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions -o - | sh -s \
gd xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer




