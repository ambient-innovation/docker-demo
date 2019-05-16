FROM php:7-apache

COPY . /srv/app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf