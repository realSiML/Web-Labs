create database if not exists guest_book;

use guest_book;

create table if not exists messages
(
	UserName varchar(20) not null,
	Email varchar(256) not null,
    Homepage varchar(256),
    `Text` text not null,
	IP int(4) unsigned not null,
    Browser varchar(100) not null,
    `Date` timestamp not null unique
);