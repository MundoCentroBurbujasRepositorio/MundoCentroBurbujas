drop database if exists MundoCentroBB;

create database MundoCentroBB;

use MundoCentroBB;


/*
Tablas segun modelo de entidad relacion
*/

/* tipo de clientes */
create table clienttypes(

	id int not null auto_increment primary key,
	`name` varchar(50) not null

);

/* clientes */
create table clients (

	id int not null auto_increment primary key,
	nis int(9) not null unique, /*cedula*/
	`name` varchar(50) not null,
	`street_address` varchar(100),
	`phone` int(8),
	`clienttype_id` int not null

);

/* tipo de usuario */
create table usertypes (

	id int not null auto_increment primary key,
	`name` varchar(50) not null,
	`description` varchar(255)
);


/* usuario */
create table users(

	id int not null auto_increment primary key,
	nis int(9)not null unique,  /*cedula*/
	`name` varchar(50) not null,
	`last_name` varchar(50) not null,
	`street_address` varchar(100),
	`phone` int(8),
	`salary` int not null,
	`usertype_id` int not null,
    `username` VARCHAR(50),
    `password` VARCHAR(255),
    `role` VARCHAR(20)

);

/* tipo de pago */
create table paymenttypes(

	id int not null auto_increment primary key,
	`name` varchar(50),
	`description` varchar(255)

);

/* tipo de factura */
create table invoicetypes(

	id int not null auto_increment primary key,
	`name` varchar(50) not null,
	`description` text

);

/* categoria de productos */
create table productcategories(

	id int not null auto_increment primary key,
	`name` nvarchar(100) not null,
	`description` text,
	`price_porcentaje` int not null
);

/* descuentos */
create table discounts(

	id int not null auto_increment primary key,
	`name` nvarchar(100) not null,
	`porcent` int not null,
	`description` text

);

/* tipop de proveedor */
create table suppliertypes(

	id int not null auto_increment primary key,
	`name` varchar(50) not null,
	`description` text

);

/* proveedores */
create table suppliers(

	id int not null auto_increment primary key,
	nisjuri int(12) not null, /* cedula juridica*/
	`street_address` varchar(255),
	`phone` int(8),
	`suppliertype_id` int not null,
	`send_way` varchar(255) not null
);

/* productos */
create table products(

	id int not null auto_increment primary key,
	`name` nvarchar(100) not null,
	`description` text,
	`stock` int not null,
	`admissiondate` datetime not null,
	`unitprice` int not null,
	`productcategory_id` int not null,
	`discount_id` int not null,
	`supplier_id` int not null
);

/* facturaciones */
create table billings(

	id int not null auto_increment primary key,
	`date` datetime,
	`user_id` int not null,
	`paymenttype_id` int not null,
	`invoicetype_id` int not null,
	`product_id` int not null,
	`total` int not null

);


/* pedidos */
create table orders(

	id int not null auto_increment primary key,
	`date_order` datetime not null,
	`description` text,
	`supplier_id` int not null,
	`product_id` int not null,
	`total` int not null,
	`paymenttype_id` int not null
);


/*
Tablas merge join or join table
*/
