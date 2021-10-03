create table miguelbd;

CREATE TABLE miguelbd.usuarios ( ci VARCHAR(10) NOT NULL , usuario VARCHAR(30) NOT NULL , password VARCHAR(250) NOT NULL, tipo VARCHAR(1) NOT NULL , PRIMARY KEY (ci)) ENGINE = InnoDB;

CREATE TABLE miguelbd.personas ( ci VARCHAR(10) NOT NULL , nombre VARCHAR(50) NOT NULL , fnacimiento DATE NOT NULL , departamento VARCHAR(2) NOT NULL , PRIMARY KEY (ci)) ENGINE = InnoDB;

CREATE TABLE miguelbd.notas ( ci VARCHAR(10) NOT NULL , sigla VARCHAR(7) NOT NULL , nota1 INT NOT NULL , nota2 INT NOT NULL , nota3 INT NOT NULL , notaf INT NOT NULL ) ENGINE = InnoDB;

CREATE TABLE miguelbd.carreras ( id INT(7) NOT NULL AUTO_INCREMENT , des VARCHAR(20) NOT NULL , extracto VARCHAR(400) NULL , texto VARCHAR(4000) NULL, img VARCHAR(10) NOT NUL , PRIMARY KEY (id)) ENGINE = InnoDB;


INSERT INTO notas (ci, sigla, nota1, nota2, nota3, notaf) VALUES 
('10101010', 'inf-111', '69', '80', '36', '62'),
('10101010', 'inf-112', '90', '40', '48', '59'), 
('10101010', 'inf-113', '45', '74', '37', '52'), 
('10101010', 'inf-114', '69', '53', '82', '68'), 
('20202020', 'inf-111', '51', '74', '61', '62'), 
('20202020', 'inf-112', '20', '48', '46', '38'), 
('20202020', 'inf-113', '0',  '70', '96', '55'),  
('20202020', 'inf-114', '76', '80', '60', '72'),
('30303030', 'inf-111', '76', '53', '95', '75'),
('30303030', 'inf-112', '45', '55', '72', '57'),
('40404040', 'inf-111', '87', '47', '81', '72'),
('40404040', 'inf-112', '13', '84', '75', '57'),
('50505050', 'inf-111', '76', '64', '84', '74'),
('50505050', 'inf-112', '23', '27', '90', '47'),
('60606060', 'inf-111', '45', '74', '54', '58'),
('60606060', 'inf-112', '87', '83', '34', '68'),
('70707070', 'inf-111', '72', '67', '65', '68'),
('70707070', 'inf-112', '38', '80', '86', '68');

INSERT INTO personas (ci, nombre, fnacimiento, departamento) VALUES 
('10101010', 'Moises Martin Silva Choque', '1977-12-14', '03'),
('10101010', 'Jose Miguel Gemio Quispe', '1996-12-14', '02'),
('20202020', 'Juan Gabriel Perez Pereira', '1994-05-14', '02'),
('30303030', 'Alan Brito Delgado', '1997-11-24', '03'),
('40404040', 'Elsa Pato', '1995-01-07', '03'),
('50505050', 'Zacarias Flores del Campo', '1992-08-19', '07'),
('60606060', 'Lola Mento', '1996-12-14', '07'),
('70707070', 'Helen Chufer', '1999-04-27', '07');

