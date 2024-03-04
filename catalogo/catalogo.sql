CREATE TABLE peliculas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    estreno DATE,
    origen VARCHAR(50),
    genero VARCHAR(50),
    director VARCHAR(100),
    actores VARCHAR(255),
    musica VARCHAR(100),
    imagen VARCHAR(200)
);
