# Sử dụng image PHP có Apache
FROM php:8.2-apache

# Cài tiện ích hệ thống
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Cài Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy toàn bộ project vào container
COPY . /var/www/html

# Set quyền
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable mod_rewrite
RUN a2enmod rewrite

# Tạo thư mục cache/logs
RUN mkdir -p /var/www/html/storage/framework/{sessions,views,cache} \
    && mkdir -p /var/www/html/bootstrap/cache

# Set working dir
WORKDIR /var/www/html

# Cấu hình Apache để Laravel chạy đúng
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

# Cài Laravel dependencies
RUN composer install --optimize-autoloader --no-dev
