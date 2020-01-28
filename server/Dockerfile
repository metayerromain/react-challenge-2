FROM php:7.4-apache
MAINTAINER HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
USER root
SHELL ["/bin/bash", "-c"]
RUN apt update
RUN apt -y install vim
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD ./config/docker/apache/apache2.conf /etc/apache2/apache2.conf
ADD ./config/docker/apache/api-vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
EXPOSE 443

CMD ["service apache2 start"]

