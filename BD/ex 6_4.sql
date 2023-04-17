#create database banco;
#use banco;

/*exercicio 1
create table produtos(codigo int not null primary key, 
descricao varchar(45) not null, 
PrecoVenda varchar(45) not null, 
PrecoCusto varchar(45) not null,
categoria varchar(45) not null);
*/
/*
insert into produtos values (1, "caderno escolar", 12.90, 9.70, 2);
insert into produtos values (2, "Caneta azul", 3.00, 1.80, 2);
insert into produtos values (3, "Carregador portátil", 49.90, 38.70, 1);
insert into produtos values (4, "Monitor para PC", 1490.90, 850.00, 1);
insert into produtos values (5, "Teclado gamer", 210.00, 140.00, 1);
insert into produtos values (6, "Headset", 130.00, 80.60, 1);
insert into produtos values (7, "Fichário", 95.90, 20.00, 2);
insert into produtos values (8, "Mochila de notebook", 120.00, 50.00, 3);
insert into produtos values (9, "Fita adesiva", 5.90, 0.90, 3);
insert into produtos values (10, "Grampeador", 6.50, 3.00, 3);
*/

/*exercicio 2
select codigo, descricao, PrecoVenda from produtos where PrecoVenda > 49.90;
*/

/*exercicio 3
select codigo, descricao, PrecoVenda, PrecoCusto, round(PrecoVenda - PrecoCusto, 2) from produtos where PrecoVenda > 5.00;
*/

/*exercicio 4
create table categoria(id_categoria int not null primary key,
material varchar(45) not null,
qtd_estoque varchar(45) not null,
nome_fornecedor varchar(45) not null)
*/
#alter table produtos drop column categoria;
#alter table produtos add column categoria int;
#alter table produtos add foreign key(categoria) references categoria(id_categoria);
/*
insert into categoria values (1, "caderno escolar", 10, "tilibra");
insert into categoria values (3, "Caneta azul", 50, "bic");
insert into categoria values (4, "Carregador portátil", 5, "samsung");
insert into categoria values (5, "Monitor para PC", 20, "hp");
insert into categoria values (6, "Teclado gamer", 40, "t-dagger");
insert into categoria values (7, "Headset", 100, "sony");
insert into categoria values (8, "Fichário", 250, "tilibra");
insert into categoria values (9, "Mochila de notebook", 35, "dell");
insert into categoria values (10, "Fita adesiva", 200, "3M");
insert into categoria values (11, "Grampeador", 400, "faber-castell");
*/

