#
# version: 0.0.1
# このファイルが変更されていたらcodeBuildで新しくイメージが作られる
#
FROM public.ecr.aws/docker/library/php:8.3-fpm-bullseye AS base

RUN apt-get update && apt-get install -y \
    # git \
    curl \
    zip \
    unzip \
    libxml2-dev \
    # cron \
    supervisor \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    tzdata \
    libonig-dev \
    libcurl4-openssl-dev \
    libpq-dev \
    imagemagick libmagickwand-dev \
  && pecl install redis \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* \
  && docker-php-ext-enable redis \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install -j$(nproc) \
    opcache \
    pdo_mysql \
    pcntl \
    mbstring \
    xml \
    curl \
    session \
    iconv \
    gd \
    exif \
    zip \
    bcmath \
  && docker-php-source delete

ARG ZTS_VERSION="20220829"

COPY --from=public.ecr.aws/docker/library/composer:2.7.6 /usr/bin/composer /usr/local/bin/composer

RUN rm /etc/localtime \
  && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime


RUN apt-get update && apt-get install -y vim procps \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

# Set Supervisor Configs
COPY ./conf/supervisord.conf /etc/supervisord.conf

COPY ./conf/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf

WORKDIR /var/www

# For local development
FROM base AS local

COPY ./conf/supervisord-local.conf /etc/supervisord.conf
CMD sh -c 'supervisord -c /etc/supervisord.conf'

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

# Laravel source code
FROM brickstack-laravel-template/builder AS builder

# Production
FROM base AS ec2
COPY --from=builder --chown=www-data /app /var/www

# cron
# ADD ./conf/crontabs /var/spool/cron/crontabs/
# RUN chmod 600 /var/spool/cron/crontabs/*

RUN mkdir -p /var/www/vendor

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --prefer-dist

# Add fonts
# RUN curl -o /tmp/font.zip https://moji.or.jp/wp-content/ipafont/IPAfont/IPAfont00303.zip \
#   && unzip /tmp/font.zip -d /tmp \
#   && php /var/www/load_font.php ipag /tmp/IPAfont00303/ipag.ttf \
#   && cp /var/www/vendor/dompdf/dompdf/lib/fonts/* /var/www/storage/fonts/ \
#   && rm -rf /tmp/font.zip /tmp/IPAfont00303

RUN chown -R www-data:www-data /var/www
USER www-data

FROM ec2 AS production
RUN php artisan optimize


FROM ec2 AS prod-supervisor
RUN php artisan optimize
CMD sh -c 'supervisord -c /etc/supervisord.conf'
