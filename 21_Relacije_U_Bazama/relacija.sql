CREATE DATABASE drustvene_mreze;

CREATE TABLE `koriscni`
(
  `id` INT PRIMARY KEY,
  `korisnicko_ime` VARCHAR(45),
  `lozinka` VARCHAR(45)
);


CREATE TABLE `profili`
(
  `int` INT PRIMARY KEY,
  `adresa` VARCHAR(45),
  `telefon` VARCHAR(45),
  `korisnik_id` INT UNIQUE 
);

------ STRANI KLJUC ZAPAMTI OVO BITNO JAKO !! ------

ALTER TABLE `profili`
ADD FOREIGN KEY (`korisnik_id`) -- ovo ce biti strani kljuc
REFERENCES `koriscni`(`id`); -- Polje iz tabale na koj stavljamo kljuc

ALTER TABLE `profili` ENGINE=INNDOB;
ALTER TABLE `korisnici` ENGINE=INNDOB

INSERT INTO `koriscni` (`id`, `korisnicko_ime`, `lozinka`)
VALUES 
(1, 'pera_preic' , '1234'),
(2, 'mika_mikic', '12345'),
(5, 'nikola_nikolic', '1212');

INSERT INTO `profili` (`int`, `korisnik_id`, `adresa`) VALUES
(1,5, 'adresa korisnika id=5'),
(10,2, 'adresa korsinika id2');

INSERT INTO `profili` (`int`, `korisnik_id`, `adresa`) VALUES
(2,1, 'adresa korisnika id=50'),

ALTER TABLE `profili`
ADD CONSTRAINT `profil_korisnik_fk` 
FOREIGN KEY (`korisnik_id`)
REFERENCES `korisnici`(`id`)
ON UPDATE CASCADE ON DELETE CASCADE;


-- veza 1 : N --

CREATE TABLE `objave`
(
  `id` INT PRIMARY KEY,
  `naslov_objave` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `komentari`
(
  `id` INT PRIMARY KEY,
  `komentar` VARCHAR(255) NOT NULL,
  `objava_id` INT NOT NULL
) ENGINE=INNODB;

ALTER TABLE `komentari`
ADD CONSTRAINT `komentari_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `objave`(`id`, `naslov_objave`) VALUES
(1, 'Moja prva objava'),
(2, 'Moja duga objava'),
(3, 'Moja treca objava');

INSERT INTO `komentari`(`id`, `objava_id`, `komentar`)
VALUES
(1, 1, 'Komentar 1 za objavu 1'),
(2, 1, 'Komentar 2 za objavu 2'),
(3, 3, 'Komentar 1 za objavu 3');

CREATE TABLE `kategorije`
(
  `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `naziv` VARCHAR(50) NOT NULL
) ENGINE= INNODB;

INSERT INTO `kategorije` (`id`, `naziv`)
VALUES
(1,'Ekonomija'),
(null, 'crna hronika');

INSERT INTO `kategorije` (`naziv`)
VALUES
('zdravlje'),
('drustvo'),
('ljubav');

CREATE TABLE `kategorije_has_objave` 
(
  `kategorija_id`  INT(10) UNSIGNED not null,
  `objava_id` int not null
) ENGINE= INNODB;

ALTER TABLE `kategorije_has_objave`
ADD CONSTRAINT `kat_obj_kategroija_fk`
FOREIGN KEY (`kategorija_id`)
REFERENCES `kategorije`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `kat_obj_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `kategorije_has_objave`
CHANGE `kategorija_id`
`kategorija_id` INT(10) UNSIGNED NOT NULL;



INSERT INTO `kategorije_has_objave` (`kategorija_id`, `objava_id`)
VALUES
(1,1),
(5,1),
(2,2),
(4,2),
(1,3);