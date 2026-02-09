FROM php:8.2-fpm-alpine3.22

ARG HOST_UID=1000
ARG HOST_GID=1000

ENV APP_PATH=/var/www/html \
    WEB_USER=docker

# Install only required system deps
RUN apk add --no-cache \
    mysql-client \
    mariadb-connector-c-dev

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Create non-root user
RUN addgroup --gid $HOST_GID docker && \
    adduser \
        --disabled-password \
        --gecos "" \
        --ingroup docker \
        --uid $HOST_UID \
        docker && \
    mkdir -p $APP_PATH && \
    mkdir -p $APP_PATH/var && \
    chown docker:docker \
        $APP_PATH \
        $APP_PATH/var

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

RUN chmod u+w /var/www/html



#run the rest as docker
USER docker

CMD ["php-fpm"]
