#!/usr/bin/env bash

# Update package lists and install required packages
apt-get update && apt-get install -y apache2 php libapache2-mod-php unzip

# Copy project files to Apache root directory
cp -r . /var/www/html

# Set correct permissions
chown -R www-data:www-data /var/www/html

# Enable Apache modules
a2enmod rewrite

# Restart Apache
service apache2 restart