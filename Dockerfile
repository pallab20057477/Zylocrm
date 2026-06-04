FROM php:8.2-apache

# Enable Apache mod_rewrite for friendly URLs
RUN a2enmod rewrite

# Copy custom Apache configuration if needed (optional)
# COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Adjust permissions
RUN chown -R www-data:www-data /var/www/html
