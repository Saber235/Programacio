show databases;

create schema Corrección_2699192;
drop schema Corrección_2699192;
use   Corrección_2699192;
show tables ;
CREATE TABLE Paises(
id_pais  int  not null,
Nombre  varchar(58)  not null,
Codigo_ps int not null,
primary key(id_pais)

);
drop table  Paises;
 describe   Paises;
 select * from  Paises;

 show tables ;
 create table Departamento (
 id_pais  int  not null,
 Id_Departamento int not null,
  Nombre varchar(60) not null,
clima varchar(40) not null,
primary key(Id_Departamento)
 );
 drop table  Departamento ;
 describe   Departamento ;
select count(*) from Departamento;

  select Id_Departamento,Nombre
 from  Ciudad
 where Id_Departamento = 1;
 
 select count(*)+1 from Ciudad   
 where Nombre like 'R%';
 
 create table Ciudad(
 id_pais  int  not null,
 Id_Departamento int not null,
 id_Ciudad int not null,
  Id_Surc int not null,
Capital varchar(1) not null,
Nombre varchar(60) not null,
clima varchar(40) not null,
primary key(id_Ciudad)
 );
 drop table  Ciudad ;
 describe   Ciudad ;
 select * from  Ciudad ;
 
 select  Surcursales.id_Ciudad,Id_Departamento
 from Surcursales,Ciudad
 where  NIT = 899999034
 and Surcursales.id_Ciudad = Ciudad.id_Ciudad ;
 
 

 
  select * from  Departamento,Ciudad where Departamento.Id_Departamento = Ciudad.Id_Departamento;

CREATE TABLE Empresas(
NIT  int  not null,
id_Ciudad int not null,
Id_Surc int not null,
Nombre_Comp varchar(50) not null, 
Act_Principal  varchar(58)  not null,
primary key(NIT)

);
drop table Empresas;
 describe   Empresas;
 select * from  Empresas;
select * from Empresas inner join Surcursales on Empresas.NIT = Surcursales.NIT inner join Ciudad.NIT on Surcursales.NIT = Ciudad.NIT;

 Create Table Administrador(
 Id_Adm int not null,
 Usuario varchar(50) not null,
 Contraseña varchar(50) not null,
 primary key(Id_Adm )
 );
 drop table Administrador;
 describe   Administrador;
 select * from  Administrador;
 
 
 
 create table Surcursales(
 NIT  int  not null,
 id_Ciudad int not null,
 Id_Surc int not null,
 Nombre varchar(60) not null,
 primary key(Id_Surc)
 );
 
  drop table Surcursales;
 describe  Surcursales;
 select * from  Surcursales;
 select * from  Surcursales,Ciudad where Surcursales.Id_Surc = Ciudad.Id_Surc
 
 select * from  select_from
 