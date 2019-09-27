/*===========================================================*/
use vkr;
select * from proveedore;
select * from costo_compra;
select * from costo_venta;
select * from vestidoe;
select * from Marcae;

drop table proveedore;
drop table vestidoe;
drop table costo_compra;
drop table costo_venta;
drop table Marcae;

/*===========================================================*/

Create table ProveedorE(
	id_proveedor int auto_increment,
	nombre_empresa varchar(100), 
	pais varchar(100),
	telefono varchar(20),
	primary key (id_proveedor)
)
/*===========================================================*/

Create table VestidoE(
	id_vestido int auto_increment,
	Descripcion varchar(700),
	marca_vestido varchar(200),
	foto varchar(300),
	primary key (id_vestido)
)
/*===========================================================*/
Create table Costo_compra(
	id_Costo_compra int auto_increment,
	costo_compra float,
	fecha_compra date,
	cantidad_pieza int,
	id_vestido int, 
	id_proveedor int,
    primary key (id_Costo_compra),
	CONSTRAINT FK_Costo_compra_id_vestido FOREIGN KEY (id_vestido) REFERENCES VestidoE (id_vestido),
	CONSTRAINT FK_Costo_compra_id_proveedor FOREIGN KEY (id_proveedor) REFERENCES ProveedorE (id_proveedor)
)
/*===========================================================*/
Create table Costo_Venta(
	id_venta int auto_increment,
	Costo_venta float,
	id_cliente int,
	id_vestido int,
    fecha_venta date,
    primary key (id_venta),
    CONSTRAINT FK_Costo_Venta_id_vestido FOREIGN KEY (id_vestido) REFERENCES VestidoE (id_vestido)
)
/*===========================================================*/

Create table Marcae(
	id_Marca int auto_increment,
	nombre_marca varchar(100),
	pais varchar(100),
	id_proveedor int,
    primary key (id_Marca),
    CONSTRAINT FK_Costo_Marcae_id_proveedor FOREIGN KEY (id_proveedor) REFERENCES ProveedorE (id_proveedor)
)
/*===========================================================*/
Create table ImgPrincipalE(
	id_imgIndex int auto_increment,
	foto_index varchar(300),
	primary key (id_imgIndex)
)
select * from ImgPrincipalE
/*===========================================================*/

Create table ContactoE(
	id_mensaje int auto_increment,
	mensaje varchar(1000),
	primary key (id_imgIndex)
)
select * from ImgPrincipalE
/*===========================================================*/


