show tables;
create schema  J_J_J  ;
drop schema   J_J_J ;
use  J_J_J;

show tables;
create table Administrador(
Id_Administrador int not null,
Correo varchar(50) not null,
primary key(Id_Administrador)
);

describe Administrador;

delete from Administrador;
select * from Administrador;
select count(*) from Administrador;

insert into Administrador( Id_AdministradoR,Correo )
values( '1','henryjhon10@gmail.com' );

insert into Administrador( Id_AdministradoR,Correo )
values( '2','corporalmovimientos123@gmail.com' );

insert into Administrador( Id_AdministradoR,Correo )
values( '3','jhonnygonsalez7@gmail.com' );





create table Cliente(
Id_Cliente int not null,
Nombres varchar(50) not null,
Apellidos varchar(50) not null,
Correo varchar(50) not null,
contraseña varchar(50) not null,
primary key(Id_Cliente)
);

describe Cliente;

delete from Cliente;
select * from Cliente;
select count(*) from Cliente;

insert into tb_registro( documento, nombre, fecha_nac )
values( '1234', 'pepito perez', '2000-01-01' );
