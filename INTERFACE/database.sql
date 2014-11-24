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
	`clienttype_id` int not null,
    constraint fk_tipoCliente_clients foreign key (clienttype_id) references clienttypes(id)

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
    `username` VARCHAR(20) unique,
    `password` VARCHAR(100) not null,
    `role` VARCHAR(20) not null

);

/* tipo de pago */
create table paymenttypes(

	id int not null auto_increment primary key,
	`name` varchar(50) not null,
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

/* tipo de proveedor */
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
	`send_way` varchar(255) not null,
    constraint fk_tipoProveedor_suppliers foreign key (suppliertype_id) references suppliertypes(id)
);

/* productos */
create table products(

	id int not null auto_increment primary key,
	`name` nvarchar(100) not null,
	`description` text,
	`stock` int not null,
	`admission_date` datetime not null,
	`unit_price` int not null,
	`productcategory_id` int not null,
	`discount_id` int not null,
	`supplier_id` int not null,
    constraint fk_categoriaProducto_products foreign key (productcategory_id) references productcategories(id),
    constraint fk_descuento_products foreign key (discount_id) references discounts(id),
    constraint fk_proveedor_products foreign key (supplier_id) references suppliers(id)
);

/* facturaciones */
create table billings(

	id int not null auto_increment primary key,
	`date` datetime not null,
	`user_id` int not null,
	`client_id` int not null,
	`paymenttype_id` int not null,
	`invoicetype_id` int not null,
	`product_id` int not null,
	`total` int not null,
    constraint fk_usuario_billings foreign key (user_id) references users(id),
    constraint fk_cliente_billings foreign key (client_id) references clients(id),
    constraint fk_tipoPago_billings foreign key (paymenttype_id) references paymenttypes(id),
    constraint fk_tipoFactura_billings foreign key (invoicetype_id) references invoicetypes(id),
    constraint fk_producto_billings foreign key (product_id) references products(id)    

);


/* pedidos */
create table orders(

	id int not null auto_increment primary key,
	`date_order` datetime not null,
	`description` text,
	`supplier_id` int not null,
	`product_id` int not null,
	`total` int not null,
	`paymenttype_id` int not null,
    constraint fk_proveedor_Orders foreign key (supplier_id) references suppliers(id) ,
    constraint fk_producto_Orders foreign key (product_id) references products(id),
    constraint fk_tipoPago_Orders foreign key (paymenttype_id) references paymenttypes(id)
    
);

/*Registros de usuarios(log)*/

create table `logs`(

	id int auto_increment not null primary key,
	session_id text not null, /*Puede cambiar*/
	ip_address text not null,
	`user_id` int not null,
	`action` text not null,
	date_action datetime not null,
    constraint fk_usuario_Logs foreign key (user_id) references users(id)
	

);


insert into users values (null,'604150516','Jeison Andres','Cespedes Morales','Guapiles',88082485,100000,'jeitae','$2a$10$y8px5pmx1gaYSMNK6.jo/Oxwzt0fr.jCg2vlEIak4I6Atsmvmz7Xi','admin');

