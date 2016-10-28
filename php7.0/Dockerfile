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
  && docker-php-ext-install \
      mysql \
      fpm \
      pdo \
      pdo_mysql \
      mysqlnd \
      mysqli \
      mcrypt \
      mbstring \
      ctype \
      zlib \
      gd \
      exif \
      intl \
      sqlite3 \
      pdo_pgsql \
      pgsql \
      xml \
      xsl \
      curl \
      openssl \
      iconv \
      json \
      phar \
      soap \
      dom \
      zip \
      session \
      gettext \
      opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
