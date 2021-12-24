create database coisasemprestadas;

create table usuarios (
    id int not null,
    nome varchar(100),
    email varchar(100) unique,
    senha varchar(10),
    tipo varchar(15)
    primary key (id)
);

insert into usuarios (nome, email, senha, tipo) 
values ('root', 'root@teste.com', '1234', 'Administrador');

create table menu (
    id int not null,
    texto varchar(100),
    link varchar(100)
    primary key (id)
);

insert into menu (texto, link) values ('Home','../home.php');
insert into menu (texto, link) values ('Perfil','../perfil.php');
insert into menu (texto, link) values ('Usuários','../usuarios.php');
insert into menu (texto, link) values ('Meus Itens','../itens.php');
insert into menu (texto, link) values ('Itens Disponíveis','../itensdisponiveis.php');
insert into menu (texto, link) values ('Meus Empréstimos','../meusemprestimos.php');
insert into menu (texto, link) values ('Sair','../logout.php');

create table menutipo (
    id int not null,
    idmenu int,
    tipo varchar(15),
    primary key (id)
    foreign key (idmenu) references menu (id)
);

insert into menutipo (idmenu, tipo) values (1, 'Administrador');
insert into menutipo (idmenu, tipo) values (2, 'Administrador');
insert into menutipo (idmenu, tipo) values (3, 'Administrador');
insert into menutipo (idmenu, tipo) values (4, 'Administrador');
insert into menutipo (idmenu, tipo) values (5, 'Administrador');
insert into menutipo (idmenu, tipo) values (6, 'Administrador');
insert into menutipo (idmenu, tipo) values (7, 'Administrador');
insert into menutipo (idmenu, tipo) values (1, 'Padrão');
insert into menutipo (idmenu, tipo) values (2, 'Padrão');
insert into menutipo (idmenu, tipo) values (4, 'Padrão');
insert into menutipo (idmenu, tipo) values (5, 'Padrão');
insert into menutipo (idmenu, tipo) values (6, 'Padrão');
insert into menutipo (idmenu, tipo) values (7, 'Padrão');

create table emprestimos(
    id int not null,
    iditem int, 
    idemprestador int,
    dataemprestimo date,
    datadevolucao date,
    status varchar(15),
    primary key (id),
    foreign key (iditem) references itens(id),
    foreign key (idemprestador) references usuarios(id),
);

create table itens(
    id int not null,
    descricao varchar(50), 
    idusuario int,
    status varchar(15),
    diasdevolucao int,
    primary key (id),
    foreign key (idusuario) references usuarios(id)
);

