FROM php:apache-bookworm
RUN apt update; docker-php-ext-install pdo pdo_mysql
RUN apt clean
COPY . /var/www/html/