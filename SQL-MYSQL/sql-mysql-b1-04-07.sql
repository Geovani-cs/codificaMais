CREATE TABLE categoria
(id int not null auto_increment,
nome_categoria varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id));


CREATE TABLE fornecedores
(id int not null auto_increment,
nome_fornecedores varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id));


CREATE TABLE fabricante
(id int not null auto_increment,
nome_fabricante varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id));


CREATE TABLE unidade_medida
(id int not null auto_increment,
nome_unidade_medida varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id));
