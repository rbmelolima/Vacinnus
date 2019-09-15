CREATE SCHEMA `vaccinus` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_cs; 

use vaccinus;
drop table pessoa;
drop table vacina;
drop table perfilmedico;
select * from pessoa;
delete from pessoa;
select * from vacina;

create table pessoa(
nome varchar(100) not null,
datanasc date not null,
celular char(11) not null unique,
cep char(8) not null,
cpf char(11), 
email varchar(100) unique not null,
senha varchar(100) not null,
primary key(cpf)
);

create table vacina(
ID int primary key auto_increment,
nome varchar(60) not null,
lugar varchar(60) not null,
dia date not null,
codigo varchar(20),
dose int not null,
cpf char(11),
foreign key(cpf) references pessoa (cpf)
);

create table perfilMedico(
cpf char(11) not null,
foreign key(cpf) references pessoa (cpf),
tipoSangue char(3) not null,
alergia varchar(150),
doadorSangue bool not null,
doadorOrgao bool not null,
doençaCronica varchar(50)
);


