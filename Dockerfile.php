# Create a file named Dockerfile.php in your project directory
FROM php:8.2-fpm

RUN docker-php-ext-install pdo pdo_mysql
