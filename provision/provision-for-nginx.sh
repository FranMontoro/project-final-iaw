#!/bin/bash

#Actualizamos la máquina
apt-get update 

#Instalamos el nginx
apt-get install -y nginx
#Herramienta de Descompresion de archivos
apt-get install -y unzip

#instalamos paquete para Soportar PHP
apt-get install -y php-fpm php-mysql

#Configuramos PhP para nginx
sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.0/fpm/php.ini

#Reiniciamos el servicio php
systemctl restart php7.0-fpm

#Copiamos el archivo en la maquina Real a la Máquina virtual
cp /vagrant/config/nginx.default /etc/nginx/sites-available/default

#Copia el archivo info.php
cp /vagrant/config/info.php /var/www/html
systemctl reload nginx
