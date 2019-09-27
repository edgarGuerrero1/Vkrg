use vkr;
show tables;
/* --=============================================================================--*/

insert into proveedore (nombre_empresa, pais, telefono) values ('nikeMx', 'mexico', '1234');
select * from proveedore;
describe proveedore;

/* --=============================================================================--*/
insert into vestidoe (Descripcion, marca_vestido, foto) values ('', '','');
select * from vestidoe;
describe vestidoe;

/* --=============================================================================--*/
insert into costo_compra (costo_compra, fecha_compra, cantidad_pieza, id_vestido, id_proveedor) 
	values (123, curdate(), 2, 1,1);
select * from costo_compra;
describe costo_compra;

/* --=============================================================================--*/
insert into costo_venta (Costo_venta, id_cliente, id_vestido, fecha_venta) 
	values (13000, 1, 1, curdate());
select * from costo_venta;
describe

/* --=============================================================================--*/

insert into Marcae (nombre_marca, pais, id_proveedor) values ('nike', 'usa',1)

/* --=============================================================================--*/
