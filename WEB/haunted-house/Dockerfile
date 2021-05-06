FROM php:8.0-apache-buster

RUN apt-get update && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN a2enmod rewrite 

COPY hello /var/www/hello/
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]
