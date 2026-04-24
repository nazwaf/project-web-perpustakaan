FROM php:8.2-cli

# Install dependency
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set workdir
WORKDIR /app

# Copy project
COPY . .

# Install Laravel deps
RUN composer install --no-dev --optimize-autoloader

# Generate key (optional nanti juga bisa manual)
RUN php artisan key:generate || true

# Expose port
EXPOSE 10000

# Run server
CMD php artisan serve --host=0.0.0.0 --port=10000