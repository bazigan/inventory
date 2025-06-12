FROM php:apache-bookworm
RUN apt update; docker-php-ext-install mysql
RUN apt clean
COPY . /var/www/html/