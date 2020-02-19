USE concesionario;

CREATE table if not exists coche(
	id int(10) auto_increment not null,
	modelo varchar(30) not null,
	marca varchar(30) not null,
	precio float(8,1) not null,
	stock int(5) not null,
	constraint pk_coche Primary key(id)
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;

CREATE table if not exists encargos(
	id int(10) auto_increment not null,
	cliente_id int(10) not null,
	coche_id int(10) not null,
	cantidad int(8) not null,
	fecha date,
	constraint pk_encargos Primary key(id),
	constraint fk_encargos_cliente FOREIGN key(cliente_id) references cliente(id),
	constraint fk_encargos_coche FOREIGN key(coche_id) references coche(id)
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;

CREATE table if not exists cliente(
	id int(10) auto_increment not null,
	vendedor_id int(10) not null,
	nombre varchar(100) not null,
	ciudad varchar(30),
	gastado int(10) not null,
	constraint pk_cliente Primary key(id),
	constraint fk_cliente_vendedor FOREIGN key(vendedor_id) references vendedor(id)
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;

CREATE table if not exists grupo(
	id int(10) auto_increment not null,
	nombre varchar(100) not null,
	ciudad varchar(30),
	constraint pk_grupo Primary key(id)
)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;

CREATE table if not exists vendedor(
	id int(10) auto_increment not null,
	group_id int(10) not null,
	jefe int(10),
	nombre varchar(100) not null,
	apellidos varchar(150),
	cargo varchar(50),
	fecha date,
	sueldo float(20,2),
	comision float(10,2),
	constraint pk_vendedores Primary key(id),
	constraint fk_vendedores_grupo FOREIGN key(group_id) references grupo(id),
	constraint fk_vendedores_jefe FOREIGN key(jefe) references vendedores(id)

)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;




insert into table (column)
values (values)


CREATE table if not exists usuario(
	email varchar(50) not null,
	password varchar(100) not null,
	nombre varchar(30),
	apellidos varchar(100),
	edad int(10),
	direccion varchar(100),
	constraint pk_usuario Primary key(email)

)engine=innoBD default charset=utf8 collate=utf8_unicode_ci;


insert into usuario (email,password,nombre,apellidos,edad,direccion)
values ('chirribula@hotmail.com','contrasenia','Veronica','Toro Gomez',25'Calle Prim 20'),
 ('papagayo@hotmail.com','otropass','Juan','Muñoz de la Vega',45,'Bahia Blanca 3'),
 ('tenedor@hotmail.com','azarpass','Antonio','González Byas',32,'Santo entierro 8)


insert into encargos(cliente_id,coche_id,cantidad,fecha)
	values(1,2,2,"2019/11/13"),
		   (2,3,5,"2019/10/02")

insert into clientes(nombre,ciudad,gastado)
	values("Pepe","Madrid",50000),
	("Marioi","Sevilla",35000)
