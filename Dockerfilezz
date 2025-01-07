FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www


# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy code to /var/www
COPY --chown=www:www-data . /var/www

# add root to www group
RUN chmod -R ug+w /var/www/storage
RUN chmod -R ug+w /var/www/database

