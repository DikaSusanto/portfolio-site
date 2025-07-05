# Set base image
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel backend files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions (simplified)
RUN chown -R www-data:www-data /var/www

# Install Node (for Vue)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Install Vue dependencies and build
WORKDIR /var/www
RUN npm install && npm run build

# Expose port (Render uses 10000)
EXPOSE 10000

# Start Laravel app
CMD php artisan serve --host=0.0.0.0 --port=10000