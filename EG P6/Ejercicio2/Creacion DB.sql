CREATE DATABASE Capitales;
USE Capitales;
CREATE TABLE Ciudades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(100),
    país VARCHAR(100),
    habitantes INT,
    superficie DECIMAL(10,2),
    tieneMetro TINYINT(1)
);