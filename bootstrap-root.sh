#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 curl php5 php5-cli php5-mysql php5-dev php5-xdebug php5-apcu php5-memcached memcached php-pear libyaml-dev vim git

printf "\n" | pecl install yaml
echo 'extension=yaml.so' | tee -a /etc/php5/apache2/php.ini
echo 'extension=yaml.so' | tee -a /etc/php5/cli/php.ini

rm -rf /var/www
ln -fs /vagrant /var/www

curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/bin/composer
