CREATE DATABASE produto;
use produto;
CREATE table produtos( 
	id int PRIMARY KEY AUTO_INCREMENT,
 	nome varchar(32), 
  	descr varchar(240),
	price double
);