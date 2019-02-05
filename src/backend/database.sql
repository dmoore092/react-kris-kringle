DROP DATABASE IF EXISTS kriskringle;
CREATE DATABASE kriskringle;

USE kriskringle;

DROP TABLE IF EXISTS preferences;
CREATE TABLE preferences(
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(50), 
    pref1 VARCHAR(500), 
    pref2 VARCHAR(500), 
    pref3 VARCHAR(500), 
    pronoun1 VARCHAR(50), 
    pronoun2 VARCHAR(50),
    PRIMARY KEY(id)
);

INSERT INTO preferences(
    name,
    pref1,
    pref2,
    pref3,
    pronoun1,
    pronoun2
)VALUES(
    'Dale',
    'Candy',
    'Gum',
    'Choolate',
    'his',
    'him'
)