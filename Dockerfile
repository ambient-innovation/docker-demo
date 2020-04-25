FROM php:7-apache

# Install mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy our application
COPY . /var/www/html