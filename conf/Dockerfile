FROM php:7.0-fpm
LABEL maintainer="rahul2u88@gmail.com"

# Download script to install PHP extensions and dependencies
# ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

# RUN chmod uga+x /usr/local/bin/install-php-extensions && sync
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    curl \
    git \
    vim \
    unzip \
    zip \
    libicu-dev \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    libxml++2.6-dev \
    libbz2-dev \
    libjpeg62-turbo-dev \
    wget
RUN cd /tmp \
            && mkdir librdkafka \
            && cd librdkafka \
            && git clone https://github.com/edenhill/librdkafka.git . \
            && ./configure \
            && make \
            && make install 
# Install various PHP extensions
RUN docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql \
    && docker-php-ext-configure mbstring --enable-mbstring \
    && docker-php-ext-configure soap --enable-soap \
    && docker-php-ext-install \
        bcmath \
        intl \
        mbstring \
        mcrypt \
        mysqli \
        pcntl \
        pdo_mysql \
        soap \
        sockets \
        zip \
  && docker-php-ext-configure gd \
    --enable-gd-native-ttf \
    --with-jpeg-dir=/usr/lib \
    --with-freetype-dir=/usr/include/freetype2 && \
    docker-php-ext-install gd \
  && docker-php-ext-install opcache \
  && docker-php-ext-enable opcache 

RUN git clone -b php7 https://github.com/php-memcached-dev/php-memcached /usr/src/php/ext/memcached \
    && docker-php-ext-configure /usr/src/php/ext/memcached \
        --disable-memcached-sasl \
    && docker-php-ext-install /usr/src/php/ext/memcached \
    && rm -rf /usr/src/php/ext/memcached

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) zip \
    && pecl install rdkafka \
    && docker-php-ext-enable rdkafka

# RUN cd /tmp \
#     && git clone -b 3.1.x https://github.com/arnaud-lb/php-rdkafka.git \
#     && cd php-rdkafka \
#     && phpize \
#     && ./configure \
#     && make  \
#     && make install \
#     && pecl install rdkafka \
#     && docker-php-ext-enable rdkafka \
#     && rm -rf /tmp/librdkafka \




# already installed:
#      iconv \
#      mbstring \

# Install Composer.
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
#     && ln -s $(composer config --global home) /root/composer
# ENV PATH=$PATH:/root/composer/vendor/bin COMPOSER_ALLOW_SUPERUSER=1

# Install prestissimo (composer plugin). Plugin that downloads packages in parallel to speed up the installation process
# After release of Composer 2.x, remove prestissimo, because parallelism already merged into Composer 2.x branch:
# https://github.com/composer/composer/pull/7904
# RUN composer global require hirak/prestissimo

ENV DRUSH_VERSION 8.x

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    mv composer.phar /usr/local/bin/composer  \
    && composer global require drush/drush:${DRUSH_VERSION} \
    && ln -s ~/.composer/vendor/drush/drush/drush /bin/drush \
    && php -r "unlink('composer-setup.php');"

WORKDIR /var/www
#CMD bash -c "chown -R www-data:www-data sites modules themes vendor"

#COPY composer.json composer.lock ./
#COPY sonar-scanner ./
RUN composer global require zaporylie/composer-drupal-optimizations
RUN composer global require hirak/prestissimo
#RUN composer install --no-scripts --no-autoloader

#CMD bash -c "composer install --no-scripts --no-autoloader"