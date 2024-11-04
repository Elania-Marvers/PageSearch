# Use PHP image
FROM php:8.2-apache

# Install necessary PHP extensions and utilities
RUN docker-php-ext-install pdo pdo_pgsql

# Enable Apache mod_rewrite for routing
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy static and PHP files
COPY . /var/www/html

# Copy and enable favicon
COPY static/favicon.png /var/www/html/favicon.ico
