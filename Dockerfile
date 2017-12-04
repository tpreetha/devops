FROM hshar/ubuntunew121

ADD Blob /var/www/html/

RUN service apache2 start

