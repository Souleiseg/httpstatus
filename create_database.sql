CREATE DATABASE IF NOT EXISTS seghir_galmot_lecoq;
use seghir_galmot_lecoq;

-- Create table of exemple
CREATE TABLE IF NOT EXISTS users
(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(1000) NOT NULL,
    mail VARCHAR(1000) NOT NULL,
    api_key VARCHAR(1000) NOT NULL,
    PRIMARY KEY (id)
);

-- Create admin user --
INSERT INTO users (id, username, password, mail, api_key) VALUES (1, 'admin', 'password', 'deschaussettes@yopmail.com', 'abcdefghjaimlesapis');


-- Create websites table --
CREATE TABLE IF NOT EXISTS sites
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    owner VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Add websites into the table --
INSERT INTO sites (id, name, owner) VALUES (1, 'Kid Exchange', 'admin');
INSERT INTO sites (id, name, owner) VALUES (2, 'Thai Tanic', 'admin');
INSERT INTO sites (id, name, owner) VALUES (3, 'Fu King Chinese', 'admin');
INSERT INTO sites (id, name, owner) VALUES (4, 'Pub Fiction', 'admin');
INSERT INTO sites (id, name, owner) VALUES (5, 'Molly Mallones', 'admin');
