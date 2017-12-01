FROM php:7.0-apache

ADD Blob /var/www/html/

RUN apt-get install php7.0-mysql

