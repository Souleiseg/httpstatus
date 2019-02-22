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
