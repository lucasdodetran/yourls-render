FROM php:8.1-apache

# Instalar extensões necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql \
    && a2enmod rewrite

# Baixar YOURLS
RUN git clone https://github.com/YOURLS/YOURLS.git /var/www/html

# Copiar configurações
COPY config.php /var/www/html/user/config.php
COPY .htaccess /var/www/html/.htaccess

# Ajustar permissões
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
