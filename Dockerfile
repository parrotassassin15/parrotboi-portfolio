FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite headers

COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
