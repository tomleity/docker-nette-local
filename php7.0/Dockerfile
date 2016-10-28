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
  && apt-get install -y \
      php7.0-mysql \
      php7.0-fpm \
      php7.0-pdo \
      php7.0-pdo_mysql \
      php7.0-mysqlnd \
      php7.0-mysqli \
      php7.0-mcrypt \
      php7.0-mbstring \
      php7.0-ctype \
      php7.0-zlib \
      php7.0-gd \
      php7.0-exif \
      php7.0-intl \
      php7.0-sqlite3 \
      php7.0-pdo_pgsql \
      php7.0-pgsql \
      php7.0-xml \
      php7.0-xsl \
      php7.0-curl \
      php7.0-openssl \
      php7.0-iconv \
      php7.0-json \
      php7.0-phar \
      php7.0-soap \
      php7.0-dom \
      php7.0-zip \
      php7.0-session \
      php7.0-gettext \
      php7.0-opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
