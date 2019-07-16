FROM php:7.3-fpm
ARG TIMEZONE

WORKDIR /var/www

MAINTAINER Maxence POUTORD <maxence.poutord@gmail.com>

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini
RUN "date"

RUN apt-get update && apt-get install -y \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libicu-dev g++

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

#add PHP extensions
RUN docker-php-ext-configure intl
RUN docker-php-ext-install \
    intl \
    pcntl \
    pdo_mysql \
    opcache

RUN yes | pecl install xdebug

ENV PATH /root/.composer/vendor/bin:$PATH
