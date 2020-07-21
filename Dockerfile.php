FROM composer as builder
WORKDIR /app
COPY ./code/composer.* /app/
RUN composer install  \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-interaction \
    --no-scripts
COPY ./code /app/
RUN composer dump-autoload

FROM php:7-fpm
WORKDIR /code
RUN docker-php-ext-install pdo pdo_mysql

COPY --from=builder /app/vendor /vendor
COPY  /code/.env.docker /code/.env
COPY ./resources/run-artisan.sh /run-artisan.sh
RUN chmod +x /run-artisan.sh
CMD /run-artisan.sh && php-fpm -F