FROM hshar/dockernew121:latest

ADD Blob /var/www/html/

RUN service apache2 start

