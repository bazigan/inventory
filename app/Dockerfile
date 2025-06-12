FROM php:apache
RUN apt update; apt install php-mysqli -y
RUN apt clean
COPY . /var/www/html/