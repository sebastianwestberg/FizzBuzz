FROM php:7.0-fpm

RUN apt-get update && apt-get install -y \

    git \
    unzip \

    # GD dependencies

    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng12-dev \
    # webp
    libvpx-dev \

    # Type docker-php-ext-install to see available extensions

    #&& docker-php-ext-install pdo_mysql opcache sockets \

    # GD configure

    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ --with-vpx-dir=/usr/include/ \
    && docker-php-ext-install gd

# Install Composer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer --version

# Set timezone

RUN rm /etc/localtime && \
    ln -s /usr/share/zoneinfo/Europe/Paris /etc/localtime && \
    "date"