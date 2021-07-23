use cadastro_veiculos;

create table veiculos(
id int not null auto_increment primary key,
numchassi Varchar(255),
marca varchar(150),
modelo varchar(150),
ano date,
placa varchar(150),
tipo varchar(180),
para varchar(190)
)engine InnoDB;