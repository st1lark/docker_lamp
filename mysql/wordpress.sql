CREATE DATABASE `wordpress`;

CREATE USER `wordpress`@`%` IDENTIFIED BY 'asfasdga';

GRANT ALL PRIVILEGES ON wordpress.* TO `wordpress`@`%`;

