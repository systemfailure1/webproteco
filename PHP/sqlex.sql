//Estando en db2 se tiene un propt db2-


Terminate		//saca de db2
db2 -t 			//Regresa el dbd pero esta vez los terminadores de sentencia seran ;

create database tienda;
db2 start;
// ya esta

conect to tienda

create table (idcliente integer not null primary key),
	nombre varchar(25) not null,										//25 caracteres obligatorio
	apellidoPaterno varchar(25) not null,
	rfc varchar(25) not null;

	//el mandato squl ha finalizado satisfactoriamente

	list tables	//muestra tablas

create table proveedor (idproveedor integer not null primary key),
	nombre varchar(25) not null,
	direccion varchar (30) not null,
	telefono varchar(10) not null;

	list tables
	decribe table proveedor //describe <nombretabla> muestra los atributos 

create table producto(idproducto integer not null primary key),
	preciocompra integer not null,
	nombre varchar(15) not null,
	descripcion varchar(30) not null,
	precioventa integer not null,
	//idproveedor-FK integer not null foreign key (idproveedor)
	idproveedor-FK integer not null,

	foreign key (idproveedorFK) references proveedor(idprovedor));

create table vendedor (idvendedor integer not null primary key),
	nombre varchar(25) not null,
	salario integer not null,
	depto char(5) not null,
	horario varchar (10) not null;

create table venta (idventa integer not null,
	//idvendedor integer not null foreign key,
	idvendedor-FK integer not null,
	idcliente-FK integer not null, 
	fecha varchar(12) not null,
	idproducto-FK integer not null,
	foreign key (idvendedor) references vendedor (idvendedor),
	foreign key (idcliente) references cliente(idcliente),
	foreign key (idproducto) references producto(idproducto),
	primary key (idventa));
















