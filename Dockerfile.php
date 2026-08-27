FROM php:8.2-fpm
RUN docker-php-ext-install pdo_mysql
# Создаем простую страницу для проверки
RUN echo "<?php phpinfo(); ?>" > /var/www/html/index.php
WORKDIR /var/www/html