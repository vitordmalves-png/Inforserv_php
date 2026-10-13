# Inforserv_php

/var/www/html/

sudo service mariadb start

sudo mysql -uroot -p

create database infoserv;

show databases;

create user 'aluno'@localhost identified by '1234';

grant all privileges on *.* to 'aluno'@localhost identified by '1234';

flush privileges;