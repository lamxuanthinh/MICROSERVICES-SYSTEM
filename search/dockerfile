FROM php:8.1-apache
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

RUN docker-php-ext-install pdo_mysql zip
RUN a2enmod rewrite
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN composer install --no-interaction --optimize-autoloader
EXPOSE 8080

CMD ["apache2-foreground"]
