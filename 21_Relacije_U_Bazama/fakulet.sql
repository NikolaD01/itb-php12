CREATE DATABASE `fakultet`

CREATE TABLE `predmeti`
(
  `id` INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `naziv` VARCHAR(45) NOT NULL,
  `smer` VARCHAR(45) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `studenti`
(
  `indeks` VARCHAR(45) UNIQUE NOT NULL PRIMARY KEY,
  `ime` VARCHAR(45) NOT NULL,
  `prezime` VARCHAR(45) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `ispiti`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `datum` DATE,
  `ocena` INT NOT NULL,
  `student_indeks` VARCHAR(50) NOT NULL,
  `predmet_id` INT NOT NULL,
  `nastavnik_id` INT NOT NULL
)ENGINE=INNODB;

CREATE TABLE `nastavnici`
(
  `id` INT NOT NULL  UNIQUE AUTO_INCREMENT PRIMARY KEY,
  `ime` VARCHAR(45) NOT NULL,
  `prezime` VARCHAR(45) NOT NULL
)ENGINE=INNODB;

ALTER TABLE `ispiti`
ADD FOREIGN KEY (`predmet_id`)
REFERENCES `predmeti`(`id`),
ADD FOREIGN KEY (`nastavnik_id`)
REFERENCES `nastavnici`(`id`);

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
 FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` =`predmeti`.`id`
LEFT JOIN `nastavnici` ON  `ispiti`.`nastavnik_id` = `nastavnici`.`id`
LIMIT 1

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
 FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` =`predmeti`.`id`
LEFT JOIN `nastavnici` ON  `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `ispiti`.`datum`="2023-05-06"

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
 FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` =`predmeti`.`id`
LEFT JOIN `nastavnici` ON  `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = "Nikola" AND `studenti`.`prezime`="Devic"

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
 FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` =`predmeti`.`id`
LEFT JOIN `nastavnici` ON  `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = "Nikola" AND `studenti`.`prezime`="Devic"
AND `ispiti`.`ocena`>8;

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`),
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`;

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`),
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `ispiti`.`datum`= "2023-05-06";

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`),
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = "Nikola" AND `studenti`.`prezime` = "Devic" 
AND `ispiti`.`ocena` > 8;


SELECT AVG(`ispiti`.`ocena`)
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime` = "Nikola" AND `studenti`.`prezime` = "Devic" 
;

SELECT MAX(`ispiti`.`ocena`)
FROM `ispiti`
LEFT JOIN `predmeti`ON `ispiti`.`predmet_id` = `predmeti`.`id`
WHERE `predmeti`.`naziv` = "CSS";

SELECT AVG(`ispiti`.`ocena`)
FROM `ispiti`
WHERE `ispiti`.`datum` = "2023";

CREATE TABLE `zvanje`
(
  `id` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `naziv_zvanja` VARCHAR(50) NOT NULL
);
CREATE TABLE `smer`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `naziv_smera` VARCHAR(50) NOT NULL
);
CREATE TABLE `katedra`
(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `naziv_katedre` VARCHAR(50) NOT NULL
);


CREATE TABLE `predavac_has_zvanje`
(
  `predavac_id` INT NOT NULL UNIQUE,
  `zvanje_id` INT NOT NULL
);

ALTER TABLE `predavac_has_zvanje`
ADD FOREIGN KEY (`predavac_id`)
REFERENCES `nastavnici`(`id`),
ADD FOREIGN KEY (`zvanje_id`)
REFERENCES `zvanje`(`id`);

ALTER TABLE `studenti`
ADD `smer_id` INT NOT NULL ;

ALTER TABLE  `nastavnici`
ADD `zvanje_id` INT NOT NULL;

ALTER TABLE `nastavnici`
ADD FOREIGN KEY (`zvanje_id`)
REFERENCES `zvanje`(`id`);

ALTER TABLE `studenti`
ADD FOREIGN KEY(`smer_id`)
REFERENCES `smer`(`id`);

CREATE TABLE `predavac_has_katedra`
(
  `predavac_id` INT NOT NULL,
  `katedra_id` INT NOT NULL 
);