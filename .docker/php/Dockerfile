FROM php:7.0-fpm

# ////////////////////////////
# 	PECL Extensions install
# ////////////////////////////

RUN apt-get update \
  	&& apt-get install -y \

libcurl4-openssl-dev \
libxslt-dev \
libmcrypt-dev \
libicu-dev g++ \
libfreetype6-dev \
libjpeg62-turbo-dev \
libmcrypt-dev \
libpng12-dev \
zlib1g-dev \
libxml2-dev \
zip 

RUN apt-get clean 

# ////////////////////////////
# 	PHP extensions install
# ////////////////////////////

RUN docker-php-ext-install \

bcmath \
	# bz2 \
calendar \
ctype \
curl \
	# dba \
	# dom \
	# enchant \
	# exif \
fileinfo \
	# filter \
	# ftp \
gd \
	# gettext \
	# gmp \
	# hash \
iconv \
	# imap \
	# interbase \
intl \
json \
	# ldap \
mbstring \
mcrypt \
mysqli \
	# oci8 \
	# odbc \
	# opcache \
	# pcntl \
	# pdo \
	# pdo_dblib \
	# pdo_firebird \
pdo_mysql \
	# pdo_oci \
	# pdo_odbc \
	# pdo_pgsql \
	# pdo_sqlite \
	# pgsql phar \
	# posix pspell \
	# readline recode \
	# reflection \
session \
	# shmop \
	# simplexml \
	# snmp \
	# soap \
	# sockets \
	# spl \
	# standard \
	# sysvmsg \
	# sysvsem \
	# sysvshm \
	# tidy \
	# tokenizer \
	# wddx \
xml \
	# xmlreader \ 
xmlrpc \
	# xmlwriter \
	# xsl \
zip 

# ////////////////////////////
# 	PECL Extensions install
# ////////////////////////////

RUN pecl install -o -f redis \
	&&  rm -rf /tmp/pear \
	&&  echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini