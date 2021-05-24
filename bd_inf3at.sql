create database cadastro;
use cadastro;
drop table usuarios;
create table usuarios(
	id int primary key auto_increment,
	email varchar(60) not null,
    senha varchar(10) not null,
    nome varchar(60) not null
);
insert into usuarios
(id,email,senha,nome)
values
(NULL,'laura@gmail.com','123','Fábio');
select * 
from usuarios
where email LIKE 'laura@gmail.com' AND senha LIKE '123';


select * from usuarios where email LIKE 'fabop@gmail.com' AND senha LIKE '243564';