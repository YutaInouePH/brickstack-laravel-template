FROM public.ecr.aws/nginx/nginx:1.24.0-alpine AS base

RUN apk --no-cache add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

COPY ./conf/nginx.conf /etc/nginx/nginx.conf
COPY ./conf/conf.d/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/

FROM base AS local

# Laravel source code
FROM brickstack-laravel-template/builder AS builder

FROM base AS ec2

RUN mkdir -p /var/www/public
COPY --from=builder --chown=www-data /app/public /var/www/public
