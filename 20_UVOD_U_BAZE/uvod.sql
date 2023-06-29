-- Komanda za Kreiranje Baze podataka:
CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- Komanda za brisanje baza podataka :
DROP DATABASE test_druga;

-- Biranje baze podataka :

USE test_baza;


-- kreiraj bazu skola
CREATE DATABASE skola	CHARACTER SET utf16 COLLATE 	utf16_slovenian_ci;

USE skola;

-- Kreiranje tabele stdetni 

CREATE TABLE studenti(
  ime VARCHAR(50),
  prezime, VARCHAR(50),

);


-- Kreiranje tabele customers

 CREATE TABLE customer(
  id INT NOT NULL,
  name VARCHAR(20) NOT NULL,
  age TINYINT NOT NULL,
  adress CHAR(25),
  salary DECIMAL(18, 2) DEFAULT 500
);
-- Kreiranje tabele customers sa primarinm kljucem
 -- CREATE TABLE IF NOT EXISTS customer(
 --  id INT NOT NULL,
 --  name VARCHAR(20) NOT NULL,
 --  age TINYINT NOT NULL,
 --  adress CHAR(25),
 -- salary DECIMAL(18, 2) DEFAULT 500,
 --  PRIMARY KEY(id)
-- ); -- ovo ne jer vec postoji tabela sa ovim nazivomm

-- Dodavanje primarnog kljuca u tabelu customer 

ALTER TABLE `customers` ADD PRIMARY KEY (`id`);

ALTER TABLE tasks ADD  PRIMARY KEY(`taks_id `);

-- Kreiranje tabele tasks

CREATE TABLE taks(
  taks_id INT UNIQUE,
  title VARCHAR(255) NOT NULL,
  start_date DATE,
  due_date DATE,
  status TINYINT NOT NULL,
  description TEXT
);

-- DODOAVANJE 

ALTER TABLE `customer` ADD active BOOLEAN;

ALTER TABLE `customer` ADD state VARCHAR(90);
ALTER TABLE `customer` ADD number_of_visits TINYINT;
ALTER TABLE `taks` ADD priority TINYINT NOT NULL;

ALTER TABLE `taks` MODIFY COLUMN description VARCHAR(265) NOT NULL;

-- dodoavanje novih redova

INSERT INTO customer
VALUES (1, "Ana", 20, "Bulevar Jovana Ducica", 600, 1, "Srbija", 37);


INSERT INTO customer(name, id, age, active, state, number_of_visits)
VALUES
("Bojana", 2, 21, 0, "Srbija", 16),
("Dejan", 3, 31, 0, "Crna Gora", 3);

INSERT INTO customer
VALUES (4, "Ana", 20, "Bulevar Jovana Ducica", 600, 1, "Srbija", 37);


INSERT INTO taks
(taks_id, title, start_date, due_date, status, description, priority)
VALUES
(1, "Čas iz ITBootcampa", "2023-06-02", "2023-06-02", 1 , "Čas iz baze podataka", 1),
(2, "Šetnja", "2023-06-01", "2023-06-01", 1, "Lagana Šetnja", 0),
(3, "Uradi domaći zadatak", "2023-06-03", NULL, 1, "Domaći zadatak iz SQL-a", 1 );


INSERT INTO `taks`
(`taks_id`, `title`, `start_date`, `due_date`, `status`, `description`, `priority`)
VALUES
(4, "Vezba iz SQL", "2023-06-02", "2023-06-02", 1, "Insert vezba",1),
(5, "Streetworkout", "2023-06-02", "2023-06-02", 1 ,"Grudi vezba",2);

-- Limitiranje broja rezultate 

