FROM php:7.4-fpm-alpine

ARG USER_ID
ARG GROUP_ID

RUN chown -R www-data:www-data /var/www
#RUN chmod 755 /var/www

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install pdo pdo_mysql

USER "${USER_ID}:${GROUP_ID}"

CMD ["php-fpm"]