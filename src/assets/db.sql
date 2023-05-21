DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_name VARCHAR(100),
    info_logo VARCHAR(50) DEFAULT '',
    info_icon VARCHAR(50) DEFAULT '',
    info_last VARCHAR(50),
    info_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    info
SET
    info_name = 'Joyeria y Relojeria "El Sol"',
    info_last = '2023-01-01 00:00:00',
    info_created = '2023-01-01 00:00:00';

DROP TABLE IF EXISTS slider;

CREATE TABLE slider (
    slider_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    slider_titulo VARCHAR(100),
    slider_imagen VARCHAR(50),
    slider_last VARCHAR(50),
    slider_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    slider
VALUES
    (
        1,
        'Bienvenido a Joyeria y Relojeria "El Sol"',
        '1.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'El mejor equipo de joyeros y relojeros a su servicio',
        '2.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Nuestro trabajo es garantizar su satisfaccion',
        '3.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_nombre VARCHAR(50),
    user_especialidad VARCHAR(50),
    user_user VARCHAR(50),
    user_pass VARCHAR(200),
    user_foto VARCHAR(100) DEFAULT 'default.png',
    user_tipo VARCHAR(50) DEFAULT 'user',
    user_last VARCHAR(50),
    user_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    users
VALUES
    (
        1,
        'Administrador',
        null,
        'admin',
        'admin',
        'default.png',
        'user',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );