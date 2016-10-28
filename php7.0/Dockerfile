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
  && apt-get install -y 
      php7.0-mysql \
      php7-fpm \
      php7-pdo \
      php7-pdo_mysql \
      php7-mysqlnd \
      php7-mysqli \
      php7-mcrypt \
      php7-mbstring \
      php7-ctype \
      php7-zlib \
      php7-gd \
      php7-exif \
      php7-intl \
      php7-sqlite3 \
      php7-pdo_pgsql \
      php7-pgsql \
      php7-xml \
      php7-xsl \
      php7-curl \
      php7-openssl \
      php7-iconv \
      php7-json \
      php7-phar \
      php7-soap \
      php7-dom \
      php7-zip \
      php7-session \
      php7-gettext \
      php7-opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
