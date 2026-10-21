ARG PHP_VERSION=8.1
FROM php:${PHP_VERSION}-apache

# soap : inscription à Espéranto-Aktiv (api/SympaAPI.php)
RUN apt-get update && apt-get install -y --no-install-recommends libxml2-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql soap \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

COPY apache.conf /etc/apache2/sites-available/000-default.conf
