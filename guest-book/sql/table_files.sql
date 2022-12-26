create database if not exists guest_book;

use guest_book;

CREATE TABLE if not exists files (
    id   INT           AUTO_INCREMENT PRIMARY KEY,
    mime VARCHAR (255) NOT NULL,
    data MEDIUMBLOB          NOT NULL
);