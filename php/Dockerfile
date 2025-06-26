FROM php:5.6-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

COPY apache.conf /etc/apache2/sites-available/000-default.conf
