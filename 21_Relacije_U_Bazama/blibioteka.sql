CREATE DATABASE `blibioteka_itb`;

CREATE TABLE `clanovi`
(
  `id` INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  `ime` VARCHAR(45) NOT NULL,
  `prezime` VARCHAR(45) NOT NULL,
  `adresa` VARCHAR(45),
  `telefon` VARCHAR(45) -- ako je int ne moze poceti 0
)ENGINE=INNODB;

CREATE TABLE `knjige`
(
  `id` INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  `naziv` VARCHAR(45) NOT NULL,
  `pisac` VARCHAR(45)
)ENGINE=INNODB;


INSERT INTO `knjige` (`naziv`,`pisac`)
VALUES
('Tetovazer iz Auswitza','Pisac 1'),
('Poslednja stanica Auswitz','Pisac 2'),
('Decak u prugastoj pidzami', 'Pisac 3');

CREATE TABLE `zanr`
(
  `id` NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  `naziv` VARCHAR(45)  NOT NULL
)ENGINE=INNODB;


INSERT  INTO `zanr`
VALUES (`naziv`)
('komedija'),
('akcija')

CREATE TABLE `zaduzenje`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `datum` DATE,
  `vratio` INT(1) NOT NULL DEFAULT 0,
  `knjiga_id` INT NOT NULL,
  `clanovi_id` INT NOT NULL
)ENGINE=INNODB;

CREATE TABLE `pisac`
(
  `id` INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
  `ime` VARCHAR(45) NOT NULL,
  `prezime` VARCHAR(45) NOT NULL,
  `bio` TEXT,
  `god_rodj` YEAR
)ENGINE=INNODB;

CREATE TABLE `knjiga_has_zanr`
(
  `knjiga_id` INT NOT NULL,
  `zanr_id` INT NOT NULL,
)ENGINE=INNODB;

ALTER TABLE `knjiga_has_zanr`
ADD FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE, --  kada brisem knjigu dozvoli mi da obrisem info o zanru
ADD FOREIGN KEY (`zanr_id`)
REFERENCES `zanr`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE; -- kad brisem zarn ostavljam informacije
-- jer zarn nije bitna informacija
-- no action brani brisanje sve dok postoji
-- strani kljuc  u toj bazi upisan
ALTER TABLE `zaduzenje`
ADD FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON DELETE NO ACTION ON  ON UPDATE CASCADE,
ADD FOREIGN KEY (`clanovi_id`)
REFERENCES `clanovi`(`id`)
ON DELETE NO ACTION ON  ON UPDATE CASCADE;

CREATE TABLE `knjige_has_pisac`
(
  `knjiga_id` INT NOT NULL,
  `pisac_id` INT NOT NULL
)ENGINE=INNODB;

ALTER TABLE `knjige_has_pisac`
ADD FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE,
ADD FOREIGN KEY (`pisac_id`)
REFERENCES `pisac`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;