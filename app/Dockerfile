FROM php:apache-bookworm
RUN apt update; docker-php-ext-install 
RUN apt clean
COPY . /var/www/html/