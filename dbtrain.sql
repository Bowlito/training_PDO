-- Active: 1750956682093@@127.0.0.1@3306@training
DROP DATABASE IF EXISTS training;
CREATE DATABASE training;

USE training;

CREATE TABLE utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    nom VARCHAR(30)
);

INSERT INTO
    utilisateurs (username, password, nom)
VALUES ("Wick", "wick", "John Wick"),
    (
        "Dalton",
        "dalton",
        "Jack Dalton"
    ),
    (
        "Maggio",
        "maggio",
        "Maggio Sophie"
    );

SELECT * FROM utilisateurs;