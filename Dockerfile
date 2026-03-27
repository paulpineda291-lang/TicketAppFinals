FROM php:8.1-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Copy your project files
COPY . /var/www/html/

# Enable Apache rewrite
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html