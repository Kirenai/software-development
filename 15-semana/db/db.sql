CREATE DATABASE IF NOT EXISTS sistema
    CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE sistema;

CREATE TABLE IF NOT EXISTS USERS (
    user_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(40) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    first_name VARCHAR(40) NOT NULL,
    last_name VARCHAR(40) NOT NULL,
    PRIMARY KEY (user_id)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_spanish_ci;