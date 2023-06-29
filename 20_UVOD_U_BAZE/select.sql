-- Citanje podataka iz baze

SELECT * FROM `taks`;

SELECT `title`, `start_date`, `due_date`, FROM taks;

SELECT `name`,  `age`, `adress` FROM customer;

-- Dohvati sva razlicita imena koja imaju nasi potrosaci "DISTINCT" vraca razlicite vrednost

SELECT DISTINCT `name` FROM `customer`;


SELECT DISTINCT `id`, `name` FROM `customer`;

SELECT DISTINCT `salaray` FROM `customer`;

-- IZ tabele cusomers procitati sve klijere:
-- koji dolaze iz SRbije,
-- Koji imaju jednaku (manju, vecu) od 500

SELECT *
FROM `customer`
WHERE `state` = 'Srbija';

SELECT *
FROM `customer`
WHERE `salary` >= 500;

SELECT `taks_id`, `title`, `description`
FROM `taks`
WHERE `priority` = 1;

-- iz tabele taks procitati sve zadatke koji su prioriteni, a koji su zavrseni
SELECT `taks_id`, `title`, `description`
FROM `taks`
WHERE `priority` != 0
AND `due_date` IS NOT NULL;

SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `salary` BETWEEN 300 AND 800; 

-- Cija je plata jednaka 500 600 ili 700
SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `salary` = 500
OR `salary` = 600
or `salary` = 700;

SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `salary` IN (500,600,700);


-- cije je ime ana bojana ili vuk

SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `name` IN ('Ana', 'Bojana', 'Luka');


-- Cije ime pocinje na slovo B 
SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `name` LIKE 'B%' ;

-- CIje ime sadrzi slovo  'j'

SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `name` LIKE '%j%' ;

-- Koji su iz Srbije RUmunije ili Bugarske

SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `state` IN ('Srbija', 'Rumunija', 'Bugarska');

-- Koji ptiuc iz  zemlje koji picnju na "S";
SELECT `name`,`adress`,`state`,`salary`
FROM `customer`
WHERE `state` LIKE 's%';

SELECT `taks_id`, `title`, `start_date`, `due_date`, `status`, `description`,`priority`
FROM `taks`
WHERE `taks_id` IN(1,4,8,12);

-- Ciji je poecetak veci od 2019 01 01
SELECT `taks_id`, `title`, `start_date`, `due_date`, `status`, `description`,`priority`
FROM `taks`
WHERE `start_date` >= '2019-01-01';

-- Ciji je status razilicti od neaktivan
SELECT `taks_id`, `title`, `start_date`, `due_date`, `status`, `description`,`priority`
FROM `taks`
WHERE `status` != 0;

-- llimitiranje broja rezulata
SELECT *
FROM `customer`
LIMIT 2;

SELECT *
FROM `customer`
WHERE `name` LIKE 'B%'
LIMIT 1;

-- Prikazi prva dva kroisnika koji imaju dvocifren broj posete

SELECT *
FROM `customer`
WHERE `number_of_visits` BETWEEN 10 AND 99
LIMIT 2;

-- Sortiranje podataka

SELECT *
FROM `customer`
ORDER BY `name`;

-- Svi korisicni po godinama od na Najstarijih ka najmladjim


SELECT *
FROM `customer`
ORDER BY `age` DESC;

--Svi koriscni po godinama od najmladjih ka najstarijima
-- i po broju poseta od vise ka manjem broju poseta
SELECT *
FROM `customer`
ORDER BY `age` ASC, `number_of_visists` DESC;

-- prikazi prva dva korisnika sa najvecim brojem poseta
-- a ciji je broj poseta dvocifren
-- (odredi korisnike sa dvocifrenim brojem poseta, i prikazi prva dva sa
-- najvecim takvim brojem poseta)

SELECT *
FROM `customer`
WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC
LIMIT 2;  

-- Prikazi korisnika koji ima najmanju platu koja je u psegu izmedju 300 i 500
SELECT *
FROM `customer`
WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary` , `name`
LIMIT 1;

--- ZADATAK 1---
SELECT *
FROM `customer`
WHERE `salary` = 600 
AND `state` = 'Srbija';

SELECT *
FROM `customer`
WHERE `name` LIKE 'S%'
OR `age` < 30;

---- Zadatak 2 ----
SELECT * 
FROM `taks`
WHERE `status` != 1
AND `priority` > 0;

--- B---

SELECT *
FROM `taks`
WHERE `due_date` <= '2019-01-01';

--- FUnkcije od selecta

-- Prebrojati kolko ima kpaca izmedju 30 i 40 godina
SELECT COUNT(`age`)
FROM `customer`
WHERE `age` BETWEEN 30 and 40;

-- Isto to samo sa preimenjovanjem polja

SELECT COUNT(`age`) AS `broj_kupaca`
FROM `customer`
WHERE `age` BETWEEN 30 AND 40;

-- Odedetii prosecan broj poseta kupaca

SELECT AVG(`number_of_visits`) AS 'prosecan_broj_poseta'
FROM `customer`;

-- Odrediti prosecnu platu kupaca iz Srije

SELECT AVG(`salary`) AS 'prosecan_broj_poseta'
FROM `customer`
WHERE `state` = 'Srbija';

-- Odrediti broj razlicitihi imena kupaca
SELECT  COUNT(DISTINCT `name`) as 'broj_razilicitih_imena'
FROM `customer`

-- Odrediti razliciti broj drzava kupaca

SELECT  COUNT(DISTINCT `state`) as 'broj_razilicitih_drzava'
FROM `customer`

-- Odrediti ime osoe koja ima najmanju platu
-- Ako ima vise takvih, ispisati bilo koju takvu osobu
SELECT `name`
FROM `customer`
WHERE `salary` = (SELECT MIN(`salary`) FROM `customer`);

-- Jos lakse resenje --
SELECT `name`
FROM `customer`
ORDER BY `salary`
LIMIT 1;
-- ispisati imena svih natprosecno starih osoba

SELECT `name`
FROM `customer`
WHERE `age` > (SELECT AVG(`age`) FROM `customer`)
ORDER BY `name`;

-- Ispisati imena svih osoba iz Srbije sa natrposencnom platom
SELECT `name`
FROM `customer`
WHERE `salary` > (SELECT AVG(`salary`) FROM `customer` WHERE `state` = 'Srbija')
AND `state` = 'Srbija';

