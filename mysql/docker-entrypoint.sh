#!/bin/bash

usermod -d /var/lib/mysql mysql

sed -i 's#bind-address		= 127.0.0.1#bind-address = 0.0.0.0#g' /etc/mysql/mysql.conf.d/mysqld.cnf

service mysql start

mysql -u'root' -p'qwerty' < /usr/local/wordpress.sql;

sleep infinity
