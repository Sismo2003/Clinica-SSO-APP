FROM php:8.0.0-apache
VOLUME [ "/www" ]
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer require mpdf/mpdf
