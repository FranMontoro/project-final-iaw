
DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda CHARACTER SET utf8mb4;
USE tienda;

CREATE TABLE usuario (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(128) NOT NULL,
  nombre VARCHAR(128) NOT NULL
);

CREATE TABLE fabricante (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

CREATE TABLE producto (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  precio DOUBLE NOT NULL,
  codigo_fabricante INT UNSIGNED NOT NULL,
  imagen VARCHAR(256),
  descripcion VARCHAR(512),
  FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);

INSERT INTO usuario VALUES (1, 'usuario@usuario.es', 'f8032d5cae3de20fcec887f395ec9a6a', 'Usuario');

INSERT INTO fabricante VALUES(1,'Asus');
INSERT INTO fabricante VALUES(2,'Lenovo');
INSERT INTO fabricante VALUES(3,'Hewlett-Packard');
INSERT INTO fabricante VALUES(4,'Samsung');
INSERT INTO fabricante VALUES(5,'Seagate');
INSERT INTO fabricante VALUES(6,'Crucial');
INSERT INTO fabricante VALUES(7,'Gigabyte');
INSERT INTO fabricante VALUES(8,'Huawei');
INSERT INTO fabricante VALUES(9,'Xiaomi');

/* codigo, nombre, precio, codigo_fabricante, imagen, descripcion */
INSERT INTO producto VALUES(1,'Disco duro SATA3 1TB', 86, 5, 'images/discosata1TB.jpg','memoria');
INSERT INTO producto VALUES(2,'Memoria RAM DDR4 8GB', 120, 6, 'images/MemoriaRAMDDR4.jpg','memoria RAM');
INSERT INTO producto VALUES(3,'Disco SSD 1 TB', 150 ,4, 'images/discoSSD1TB.jpg','memoria SSD' );
INSERT INTO producto VALUES(4,'GeForce GTX 1050Ti',185,7, 'images/GeForceGTX1050Ti.jpg','grafica');
INSERT INTO producto VALUES(5,'GeForce GTX 1080 Xtreme',755,6, 'images/GeForceGTX1080Xtreme.jpg','super grafica');
INSERT INTO producto VALUES(6,'Monitor 24 LED Full HD',202,1, 'images/Monitor24LED.png','monitor');
INSERT INTO producto VALUES(7,'Monitor 27 LED Full HD',245,1, 'images/Monitor27LED.jpg','monitor grande');
INSERT INTO producto VALUES(8,'Portátil Yoga 520',559,2, 'images/PortatilYoga520.png','portatil');
INSERT INTO producto VALUES(9,'Portátil Ideapd 320',444,2, 'images/PortatilIdeapad320.jpg','otro portatil');
INSERT INTO producto VALUES(10,'Impresora HP Deskjet 3720',59,3, 'images/ImpresoraHP.jpg','impresora');
INSERT INTO producto VALUES(11,'Impresora HP Laserjet Pro M26nw',180,3, 'images/ImpresoraHPLaserjetPro.jpg','me quede sin tinta en la otra impresora');