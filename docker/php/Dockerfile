FROM php:cli-buster

MAINTAINER Pavlov Vladimir p4vlow.vl4d@yandex.ru

RUN apt-get update && \
    apt-get install vim curl wget git libevent-dev libssl-dev libssl-doc zip libzip-dev -y

RUN docker-php-ext-install tokenizer zip sockets

RUN pecl install event

# install composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /tmp/* /var/tmp/* /usr/share/doc/*

RUN mkdir /home/stranger/ && \
    groupadd -g 1000 stranger && \
    useradd -g 1000 -u 1000 -b /home/stranger stranger && \
    chown stranger:stranger -R /home/*

USER stranger

WORKDIR /home/app