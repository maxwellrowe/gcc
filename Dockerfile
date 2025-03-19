# Use the official PHP Apache image
FROM php:apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to Apache root directory
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Expose the default Apache port
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]