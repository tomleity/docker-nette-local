FROM php:7.0-fpm

RUN apt-get update \
  && apt-get install -y libcurl4-openssl-dev sudo git libxslt-dev mercurial subversion zlib1g-dev graphviz zip libmcrypt-dev libicu-dev g++ \
  && apt-get clean \
  
  && echo 'deb http://packages.dotdeb.org jessie all' >> /etc/apt/sources.list \
  && echo 'deb-src http://packages.dotdeb.org jessie all' >> /etc/apt/sources.list \
  && apt-get install -y wget \
  && wget https://www.dotdeb.org/dotdeb.gpg \
  && apt-key add dotdeb.gpg \
  && apt-get update \
  
  && docker-php-ext-install pdo \
  && docker-php-ext-install pdo_mysql \
  && docker-php-ext-install mysqli \
  && docker-php-ext-install mcrypt \
  && docker-php-ext-install mbstring \
  && docker-php-ext-install ctype \
  && docker-php-ext-install gd \
  && docker-php-ext-install exif \
  && docker-php-ext-install intl \
  && docker-php-ext-install sqlite3 \
  && docker-php-ext-install pdo_pgsql \
  && docker-php-ext-install pgsql \
  && docker-php-ext-install xml \
  && docker-php-ext-install xsl \
  && docker-php-ext-install curl \
  && docker-php-ext-install openssl \
  && docker-php-ext-install iconv \
  && docker-php-ext-install json \
  && docker-php-ext-install phar \
  && docker-php-ext-install soap \
  && docker-php-ext-install dom \
  && docker-php-ext-install zip \
  && docker-php-ext-install session \
  && docker-php-ext-install gettext \
  && docker-php-ext-install opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
