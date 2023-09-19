show databases;

create schema Proget_Janflahs_Music;
drop schema   Proget_Janflahs_Music;
use     Proget_Janflahs_Music;
show tables ;
CREATE TABLE Usuario(
id_Usuario  int  not null,
Correo   varchar(58)  not null,
Contraseña varchar(10) not null,
Dinero  int  null,
Edad varchar(2) null,
Genero varchar(2) null,
primary key(id_Usuario)

);
drop table  Usuario;
 describe   Usuario;
 select * from   Usuario;
 
#Este Comando es para insertar datos en las tablas creadas "___________"
 insert into  Usuario(id_Usuario,Correo,Contraseña)
 Values('1','Jhonnygonsalez7@gmail.com','Jhonny77');
 
 insert into  Usuario(id_Usuario,Correo,Contraseña)
 Values('2','Jhonnytorres650@gmail.com','SAPAPE');
 
 
 insert into  Usuario(id_Usuario,Correo,Contraseña)
 Values('3','NorfaliaT127@gmail.com','Norfalia12');
 
 insert into  Usuario(id_Usuario,Correo,Contraseña)
 Values('4','MarioGamboa12@gmail.com','Amarillo17');
 
 #Este comando es para Actualizar los insertados en las tablas cuyos valores pueden ser reiscribidos"____________"
 update Usuario
 set Dinero='-3000'
where id_Usuario='4';

#Este Comando es para seleccuionar los numeros de correos que hay que igualdad tienen"_________"

 select Correo From Usuario;
 
 select count(distinct Correo)
 from Usuario;


 #Este comando es para desactivar el modo seguro de SQL "___________"
set sql_safe_updates= 0;

#Este Comando es una Función de agrupamiento"__________"
select  count(Edad) from Usuario 
where Edad >=18;

select sum(Dinero) from Usuario
where Edad <=17;

select Dinero, Dinero*2 AS Dinero2 
from Usuario
where Edad <=18
 and Edad <=45;

 select count(*) from Usuario   
 where Correo not like 'a%';
 
 #Comando para ordenar alfaveticamenete desendente mente de arriba hacia abajo POR EJEMPLO oder by Dinero Si se quiere asendente 'asc' o desendente 'desc'"_______________"
 select * from Usuario 
 WHERE Edad <=17
 order by Dinero desc;
 
 
 
#Cual es la edad maxima de los menores de edad en la tablla Usuario casilla edad hasi se saca "__________________"
select max(Edad) from Usuario
where Edad <18;

#Comando para agrupar dos tablas y mostrarlas separadas que es cuanta plata tienen los M Y Cuanta tienen los F y pues separados "______________"
select Genero, sum(Dinero)
From Usuario
group by Genero;


alter table Usuario 
add  Dirección varchar(50);




 create table Category(
id_Category int not null,
id_Usuario  int  not null,
Usuario  varchar(1) not null,
Administrador varchar(1) not null,
 primary key(id_Category)

 );