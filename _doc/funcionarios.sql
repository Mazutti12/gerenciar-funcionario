use laravel

create table funcionarios(
    id int not null auto_increment,
    nome varchar(100) not null,
    cargo varchar(100) not null,
    dtnasc date not null,
    primary key(id)
);
