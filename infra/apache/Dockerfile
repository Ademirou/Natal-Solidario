FROM php:8.1-apache


ARG UID
ARG GID
ARG USER

RUN useradd ${USER}

RUN usermod -aG sudo ${USER}


RUN apt-get update -yqq && \
    apt-get install -y apt-utils zip unzip nano libzip-dev libpq-dev libmcrypt-dev \
    libbz2-dev libsqlite3-dev libgmp-dev libxml2-dev && \
    a2enmod rewrite && \
    docker-php-ext-install pdo_mysql mysqli zip bcmath calendar bz2 sockets gmp && \
    pecl install mcrypt-1.0.5 && \
    docker-php-ext-enable mcrypt && \
    rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
     libfreetype6-dev \
     libjpeg62-turbo-dev \
     libpng-dev \
     libwebp-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ --with-webp=/usr/include/ \
 && docker-php-ext-install -j$(nproc) gd

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

RUN composer selfupdate && \
    composer require "phpunit/phpunit:~9.3.3" --prefer-source --no-interaction && \
    ln -s /var/www/html/vendor/bin/phpunit /usr/bin/phpunit

COPY default.conf /etc/apache2/sites-enabled/000-default.conf

RUN chown -R ${USER}:${USER} /var/www
RUN mkdir /var/www/html/storage
RUN chmod -R 755 /var/www/html/storage

RUN pecl install xdebug-3.1.0 \
    && docker-php-ext-enable xdebug
#RUN pecl -q install xdebug-2.9.0
RUN apt-get update -yqq
#RUN apt-get install cron -y
RUN apt-get install git -y

COPY schedule/entrypoint.sh /var/www/entrypoint.sh

RUN chmod +x /var/www/entrypoint.sh

RUN apt-get install -y supervisor # Installing supervisord

ADD supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN docker-php-ext-install exif

RUN apt-get update 

RUN apt-get install -y libmagickwand-dev

RUN pecl install imagick

RUN docker-php-ext-enable imagick


WORKDIR /var/www/

ENTRYPOINT ["/usr/bin/supervisord"]

EXPOSE 80