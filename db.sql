CREATE DATABASE gamelog;

use gamelog;

--  Create tables

	-- Create users
CREATE TABLE users(
	userId VARCHAR(50) NOT NULL PRIMARY KEY,
	nickName VARCHAR(30) NOT NULL,
	firstName VARCHAR(25) NOT NULL,
	lastName VARCHAR(25) NOT NULL,
	img VARCHAR(200),
	email VARCHAR(100) NOT NULL
);

CREATE TABLE favourites(
	favouriteId VARCHAR(100) NOT NULL PRIMARY KEY,
	userId VARCHAR(50) NOT NULL,
	gameName VARCHAR(50) NOT NULL,
	img VARCHAR(200),
	description VARCHAR(500),
	FOREIGN KEY (userId) REFERENCES users(userId)
);

CREATE TABLE blogs(
	blogId VARCHAR(100) NOT NULL PRIMARY KEY,
	userId VARCHAR(50) NOT NULL,
	title VARCHAR(30) NOT NULL,
	text LONGTEXT NOT NULL,
	FOREIGN KEY (userId) REFERENCES users(userId)
);

