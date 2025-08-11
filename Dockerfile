FROM php:8.2-apache

RUN Docker-php-ext-install pdo pdo-mysql

COPY . /src/var/www/html/
