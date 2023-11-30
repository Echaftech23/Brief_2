-- Creation de Base de donnees :
CREATE DATABASE Movies_db;

--creation des tables :

--table User :
CREATE TABLE users(
    id INT KEY PRIMARY NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    role TINYINT
);

--INDEX User :
CREATE INDEX idx_username ON users(username);

-- table Movie :
CREATE TABLE movies(
    id INT KEY PRIMARY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    description VARCHAR(150),
    duration INT,
    image_path VARCHAR(150),
);

--INDEX Movie:
CREATE INDEX idx_title ON movies(title);

-- table intermédiaire :
CREATE TABLE users_movies(
    user_id INT,
    movie_id INT,
    PRIMARY KEY (user_id, movie_id),
    FOREIGN KEY user_id REFERENCES users(id),
    FOREIGN KEY movie_id REFERENCES movies(id)
);


-- table Cast :
CREATE TABLE casts(
    id INT KEY PRIMARY NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    character VARCHAR(50) NOT NULL
);

--INDEX Movie:
CREATE INDEX idx_name ON casts(name);

-- table intermédiaire :
CREATE TABLE movies_casts(
    movie_id INT,
    cast_id INT,
    PRIMARY KEY (movie_id, cast_id),
    FOREIGN KEY movie_id REFERENCES movies(id),
    FOREIGN KEY user_id REFERENCES casts(id)
);

-- table Category :
CREATE TABLE categories(
    id INT KEY PRIMARY NOT NULL AUTO_INCREMENT,
    type VARCHAR(200) NOT NULL,
    movie_id INT,
    FOREIGN KEY movie_id REFERENCES movies(id)
);

--INDEX Movie:
CREATE INDEX idx_type ON categories(type);

-- table Statut :
CREATE TABLE statuses(
    id INT KEY PRIMARY NOT NULL AUTO_INCREMENT,
    Status VARCHAR(100) NOT NULL,
    movie_id INT,
    FOREIGN KEY movie_id REFERENCES movies(id)
);

-- table Review :
CREATE TABLE Reviews(
    id INT KEY PRIMARY NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    description VARCHAR(150),
    image_path VARCHAR(150),
    date DATE,
    movie_id INT,
    FOREIGN KEY movie_id REFERENCES movies(id)
);

--INDEX Review:
CREATE INDEX idx_uername ON reviews(username);