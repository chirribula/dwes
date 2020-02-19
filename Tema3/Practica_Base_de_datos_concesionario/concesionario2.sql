USE concesionario2;

CREATE table if not exists coches(
	id int(10) auto_increment not null,
	modelo varchar(100),
	marca varchar(100),
	precio int(20),
	stock int(20),
	constraint pk_coche Primary key(id)
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;


CREATE table if not exists encargos(
	id int(10) auto_increment not null,
	cliente_id int(10),
	coche_id int(10),
	cantidad int(20),
	fecha date,
	constraint pk_encargos Primary key(id),
	constraint fk_encargos_cliente FOREIGN key(cliente_id) references clientes(id),
	constraint fk_encargos_coche FOREIGN key(coche_id) references coches(id)
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;

CREATE table if not exists clientes(
	id int(10) auto_increment not null,
	nombre varchar(100),
	ciudad varchar(100),
	gastado float(50,2),
	constraint pk_cliente Primary key(id)	
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;


INSERT INTO coches (modelo,marca,precio,stock) VALUES
 ( "Altea", "Seat", 20000,5),
 ( "Toledo", "Seat", 25000,4),
 ( "A3", "Audi", 50000,10);