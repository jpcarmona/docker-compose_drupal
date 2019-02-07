FROM php:7.3.1-fpm-stretch

RUN rm /etc/apt/preferences.d/no-debian-php

RUN apt-get update && apt-get install -y \
  php7.0-mysql php7.0-mbstring php7.0-gd php7.0-xml