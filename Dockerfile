FROM hshar/ubuntuphp

ADD Blob /var/www/html/

RUN service apache2 restart

