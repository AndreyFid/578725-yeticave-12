CREATE DATABASE YetiCave
	DEFAULT CHARACTER SET utf8
	DEFAULT COLLATE utf8_general_ci;


CREATE TABLE categories (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	code VARCHAR(255)
);

CREATE TABLE lots (
	id INT AUTO_INCREMENT PRIMARY KEY,
	date_on DATE,
	name VARCHAR(255),
	pick VARCHAR(255),
	price INT,
	dat_end DATE,
	step_price	INT
);

CREATE TABLE rate (
	id INT AUTO_INCREMENT PRIMARY KEY,
	date_on DATE,
	price INT(10)
);

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	date_on VARCHAR(255),
	email VARCHAR(255) NOT NULL UNIQUE,
	name VARCHAR(255),
	password CHAR(64),
	Contact_Information VARCHAR(255),
	INDEX in_email (email)
);