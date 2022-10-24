create DATABASE Animales;
CREATE TABLE t_animales(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT, nombre VARCHAR(255), habilidad VARCHAR(255), localizacion VARCHAR(255), peligro VARCHAR(10),updated_at date, created_at date
);