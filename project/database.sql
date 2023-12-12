--------phpmyadmin------
--$severname = "localhost:3306";
--$username = "username";
--$password = "vyvGSjrNc3iX24F8";
--$dbname = "project";
----------account-------
--user_name : admin
--pass_word : 12345678
--- database------
CREATE DATABASE project;
----table---------
CREATE TABLE image(
	I_ID int not null IDENTITY(1,1) PRIMARY KEY ,
	title varchar(255),
	price float,
	img char(255)
);
CREATE TABLE customer(
	customer_id int not null IDENTITY(1,1) PRIMARY KEY,
	name varchar(255),
	phone char(10),
	location varchar(255),
	note varchar(255),
	I_ID int,
	order_id int
);
CREATE TABLE cart(
	O_ID int not null IDENTITY(1,1) PRIMARY KEY,
	I_ID int ,
	size char(255),
	quantity float,
	total float
);
CREATE TABLE orders(
	order_id int not null IDENTITY(1,1) PRIMARY KEY,
	I_ID int ,
	size char(255),
	quantity float,
	total float
);
CREATE TABLE admin(
	A_ID int not null IDENTITY(1,1) PRIMARY KEY,
	user_name varchar(255),
	password char(255)
);
CREATE TABLE contact(
	C_ID int not null,
	your_name varchar(255),
	email char(255),
	subject varchar(255),
	comment varchar(255)
);
---------key----------------------
ALTER TABLE customer ADD CONSTRAINT FK_I_ID FOREIGN KEY(I_ID)
REFERENCES image(I_ID);
ALTER TABLE customer ADD CONSTRAINT FK_order_id FOREIGN KEY(order_id)
REFERENCES orders(order_id);
ALTER TABLE cart ADD CONSTRAINT FK_I_ID FOREIGN KEY(I_ID)
REFERENCES image(I_ID);
---------Insert--------------------
INSERT INTO image(title,price,img) VALUES
('T.Shirt',250,'ao1.png'),
('Somi',300,'somi.png'),
('Skirt',100,'skirt.jfif'),
('Ties',50,'tie.jfif'),
('Sock',20,'sock.jpg'),
('Chocks',500,'skirt_marry.jpg'),
('Jacket',450,'categories_1.jfif'),
('Belt',200,'Belts.jfif'),
('Shorts',30,'shorts.jfif');
INSERT INTO admin(user_name,password) VALUES
('admin','12345678');
------------------------------------