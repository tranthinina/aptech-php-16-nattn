
CREATE DATABASE aptech_php_16_nina;
DROP DATABASE aptech_php_16_nina;
CREATE DATABASE aptech_php_16_nina;
CREATE TABLE aptech_php_16_nina.users (
id INT,
last_name varchar(255),
first_name varchar(255),
email varchar(255) unique,
create_at datetime,
modified_at datetime,
deleted_at datetime
);
DROP TABLE aptech_php_16_nina.users;
CREATE TABLE aptech_php_16_nina.users(
id INT,
last_name varchar(255),
first_name varchar(255),
email varchar(255) unique,
create_at datetime,
modified_at datetime,
deleted_at datetime
);
ALTER TABLE aptech_php_16_nina.users
ADD dob date;
ALTER TABLE aptech_php_16_nina.users
DROP COLUMN dob;
INSERT INTO aptech_php_16_nina.users (id,last_name,first_name,email,create_at,uState,uCreatedDate) VALUES
(1, 'Na', 'Tran', 'na@gmail.com', 1, 1, NOW()),
(1, 'Nam', 'Tran', 'nam@gmail.com', 2, 1, NOW()),
(1, 'Vu', 'Nguyen', 'vu@gmail.com', 1, 2, NOW()),
(1, 'Lan', 'Tran', 'lan@gmail.com', 1, 1, NOW()),
(1, 'Hoa', 'Tran', 'hoa@gmail.com', 2, 1, NOW());
