FROM php:apache-bookworm
RUN apt update; apt install php-mysql -y
RUN apt clean
COPY . /var/www/html/