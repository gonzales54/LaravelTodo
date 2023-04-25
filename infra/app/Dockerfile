FROM php:8.1-fpm

ARG USERNAME=gonzales
ARG GROUPNAME=gonzales
ARG UID=1000
ARG GID=1000
ARG PASSWORD=password

COPY ./infra/app/php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
    && apt-get -y install git zip unzip vim sudo

RUN docker-php-ext-install pdo_mysql

RUN groupadd -g $GID $GROUPNAME && \
    useradd -m -s /bin/bash -u $UID -g $GID -G sudo $USERNAME && \
    echo $USERNAME:$PASSWORD | chpasswd && \
    echo "$USERNAME   ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers
    
USER $USERNAME
WORKDIR /home/$USERNAME/app
