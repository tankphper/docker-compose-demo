FROM php:7.2-fpm

MAINTAINER Tank <tankphper@gmail.com>

RUN /bin/ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

RUN apt-get update \
    && apt-get install -y \
    vim \
    curl \
    wget \
    zip \
    lsof \
    procps

RUN apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql mysqli pcntl sockets

RUN apt-get install -y \
    libxml2-dev \
    && docker-php-ext-install -j$(nproc) soap

RUN apt-get install -y \
    libmcrypt-dev \
    && pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt

RUN pecl install redis \
    && docker-php-ext-enable redis

RUN apt-get clean \
    && apt-get autoremove \
    && pecl clear-cache

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer self-update --clean-backups

WORKDIR /www/web
