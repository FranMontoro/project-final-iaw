#!/bin/bash
# Retrieve new lists of packages
apt-get update

# Install debconf-utils and configure MySQL selections
apt-get install -y debconf-utils

DB_ROOT_PASSWD=root
debconf-set-selections <<< "mysql-server mysql-server/root_password password $DB_ROOT_PASSWD"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $DB_ROOT_PASSWD"

# Install and configure MySQL Server, send -i -e (buscar y remplazar)
apt-get install -y mysql-server
sed -i -e "s/127.0.0.1/0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf
/etc/init.d/mysql restart
mysql -uroot mysql -p$DB_ROOT_PASSWD <<< "GRANT ALL PRIVILEGES ON *.* TO root@'%' IDENTIFIED BY '$DB_ROOT_PASSWD'; FLUSH PRIVILEGES;"

#Crear la Database tienda
DB_NAME=tienda;
DB_USER=tienda_user;
DB_PASSWORD=tienda_password;
mysql -uroot -p$DB_ROOT_PASSWD <<< "DROP DATABASE IF EXISTS $DB_NAME"
mysql -uroot -p$DB_ROOT_PASSWD <<< "CREATE DATABASE $DB_NAME CHARACTER SET utf8;"
mysql -uroot -p$DB_ROOT_PASSWD <<< "GRANT ALL PRIVILEGES ON $DB_NAME.* TO $DB_USER@'%' IDENTIFIED BY '$DB_PASSWORD'; FLUSH PRIVILEGES;"

#enlazamos los cambios de la BBDD con el archivo .sql
mysql -uroot -p$DB_ROOT_PASSWD < sql/tienda.sql