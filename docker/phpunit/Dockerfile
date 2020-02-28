FROM php:7.4.0-fpm

# PHPUnit Docker Container.
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get -y update && \
    apt-get -y install apt-utils && \
    apt-get -y upgrade && \
    apt-get -y install wget apt-transport-https lsb-release

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list

RUN apt-get -y update && \
    apt-get -y --allow-unauthenticated install php7.4 php7.4-fpm \
        php7.4-cli php7.4-json php7.4-mbstring php7.4-mysql php7.4-pdo \
        php7.4-dom php7.4-sqlite3 php7.4-xdebug php-pcov

RUN wget -O phpunit https://phar.phpunit.de/phpunit-8.phar
RUN chmod +x phpunit
RUN mv phpunit /usr/local/bin/phpunit
