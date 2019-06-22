CREATE DATABASE webdoc CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE webdoc;

CREATE TABLE utilisateur (
  id INT(3) NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  mdp VARCHAR(255) NOT NULL,
  type VARCHAR(20) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=INNODB;

-- Mot de passe: P@ssw0rd
INSERT INTO utilisateur (
  pseudo,
  email,
  mdp,
  type
) VALUES (
  "admin",
  "admin@boutique.fr",
  "$2y$10$Q58qgso4.DzY/PvoKjBWHeUws06YWH.g2n2ZDEk7M/J0Pj10kWv.2",
  "admin"
);


CREATE TABLE article (
  id INT(3) NOT NULL AUTO_INCREMENT,
  titre VARCHAR(50) NOT NULL,
  description VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=INNODB;

