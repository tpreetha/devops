FROM hshar/ubuntunew1212

ADD Blob /var/www/html/

RUN service apache2 start

