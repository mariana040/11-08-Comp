FROM php:8.0-apache

RUN a2enmod rewrite

COPY . var/www/html/
