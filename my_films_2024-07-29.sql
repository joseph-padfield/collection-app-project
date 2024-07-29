# ************************************************************
# Sequel Ace SQL dump
# Version 20067
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 11.4.2-MariaDB-ubu2404)
# Database: my_films
# Generation Time: 2024-07-29 13:19:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table films
# ------------------------------------------------------------

DROP TABLE IF EXISTS `films`;

CREATE TABLE `films` (
  `Title` varchar(255) DEFAULT NULL,
  `Running time` varchar(255) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Director` varchar(255) DEFAULT NULL,
  `Produced` varchar(255) DEFAULT NULL,
  `Language` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;

INSERT INTO `films` (`Title`, `Running time`, `Year`, `Director`, `Produced`, `Language`, `id`)
VALUES
	('1408','104',2007,'Mikael Håfström','US','English',1),
	('A Quiet Place','90',2018,'John Krasinski','US','English',2),
	('A Wounded Fawn','',2022,'Travis Stevens','US','English',3),
	('Apostle','130',2018,'Gareth Evans','UK','English',4),
	('Baskin','97',2015,'Can Evrenol','Turkey','Turkish',5),
	('Brooklyn 45','',2023,'Ted Geoghegan','US','English',6),
	('Come True','105',2020,'Anthony Scott-Burns','Canada','English',7),
	('Darlin\'','101',2019,'Pollyanna McIntosh','US','English',8),
	('Don\'t Breath','88',2016,'Fede Álvarez','US','English',9),
	('Don\'t Listen','97',2020,'Angel Gómez Hernández','Spain','Spanish',10),
	('Don\'t Look Up','88',2021,'Adam McKay','US','English',11),
	('Donnie Darko','113',2001,'Richard Kelly','US','English',12),
	('Escape Room','99',2019,'Adam Robitel','US','English',13),
	('Evil Dead Rise','',2023,'Lee Cronin','US','English',14),
	('Fall','',2022,'Scott Mann','US','English',15),
	('Get Out','104',2017,'Jordan Peele','US','English',16),
	('Grim Cutty','',2022,'John Ross','US','English',17),
	('Hellhouse LLC Origins: The Carmichael Manor','110',2023,'Stephen Cognetti','US','English',18),
	('Hereditary','127',2018,'Ari Aster','US','English',19),
	('Huesera','',2022,'Michelle Garza Cervera','Mexico','Spanish',20),
	('Influencer','',2022,'Kurtis David Harder','Canada','English',21),
	('It Comes at Night','91',2017,'Trey Edward Shults','US','English',22),
	('It Follows','100',2014,'David Robert Mitchell','US','English',23),
	('Kill List','95',2011,'Ben Wheatley','UK','English',24),
	('Last Shift','90',2014,'Anthony DiBlasi','US','English',25),
	('Leave the World Behind','',2023,'Sam Esmail','US','English',26),
	('Mad God','83',2021,'Phil Tippett','US','English',27),
	('Malignant','111',2021,'James Wan','US','English',28),
	('M3GAN','',2022,'Gerard Johnstone','US','English',29),
	('Men','',2022,'Alex Garland','UK','English',30),
	('Midsommar','148',2019,'Ari Aster','US','English',31),
	('Moloch','',2022,'Nico van den Brink','Netherlands','Dutch',32),
	('Nope','',2022,'Jordan Peele','US','English',33),
	('Parasite','132',2019,'Bong Joon-Ho','South Korea','Korean',34),
	('Piggy','',2022,'Carlota Martinez-Pereda','Spain','Spanish',35),
	('Prey','85',2022,'Dan Trachtenberg','US','English',36),
	('Ready or Not','95',2019,'Matt Bettinelli-Olpin, Tyler Gillett','US','English',37),
	('Relic','89',2020,'Natalie Erika James','Australia','English',38),
	('Revenge','108',2017,'Caralie Fargeat','France','French',39),
	('Run Rabbit Run','',2023,'Daina Reid','Australia','English',40),
	('Saloum','',2021,'Jean Luc Herbulot','Senegal','French',41),
	('Sister Death','',2023,'Paco Plaza','Spain','Spanish',42),
	('Sisu','',2023,'Jalmari Helander','Finland','Finnish',43),
	('Skinamarink','',2022,'Kyle Edward Ball','Canada','English',44),
	('Slender Man','93',2018,'Sylvain White','US','English',45),
	('Smile','',2022,'Parker Finn','US','English',46),
	('Speak No Evil','',2022,'Christian Tafdrup','Denmark','Danish',47),
	('Aterrados (Terrified)','87',2017,'Demián Rugna','Argentina','Spanish',48),
	('The Black Phone','98',2022,'Scott Derickson','US','English',49),
	('The Curse of Audrey Earnshaw','93',2020,'Thomas Robert Lee','Canada','English',50),
	('The Dark and the Wicked','95',2020,'Bryan Bertino','US','English',51),
	('The Deeper You Dig','95',2019,'John Adams, Toby Poser','US','English',52),
	('The Exorcist','122',1973,'William Friedkin','US','English',53),
	('The House of the Devil','95',2009,'Ti West','US','English',54),
	('The Hunt','90',2020,'Craig Zobel','US','English',55),
	('The Little Things','128',2021,'John Lee Hancock','US','English',56),
	('The Lords of Salem','101',2012,'Rob Zombie','US','English',57),
	('The Manor','90',2021,'Axelle Carolyn','US','English',58),
	('The New Mutants','94',2020,'Josh Boone','US','English',59),
	('The Old Ways','91',2020,'Christopher Alender','US','English/Spanish/Nahuati',60),
	('El Orfanato (The Orphanage)','105',2007,'J. A. Bayona','Spain','Spanish',61),
	('The Others','104',2001,'Alejandro Amenábar','Spain','English',62),
	('The Pale Blue Eye','',2023,'Scott Cooper','US','English',63),
	('The Pope\'s Exorcist','',2023,'Julius Avery','US','English',64),
	('The Power','92',2021,'Corinna Faith','UK','English',65),
	('The Purge','85',2013,'James DeMonaco','US','English',66),
	('The Ritual','94',2017,'David Bruckner','UK','English',67),
	('The Sadness','',2021,'Rob Jabbaz','Taiwan','Mandarin',68),
	('The Silence of the Lambs','118',1991,'Jonathan Demme','US ','English',69),
	('The Tank','',2023,'Scott Walker','New Zealand','English',70),
	('The Woman','101',2011,'Lucy McKee','US','English',71),
	('The Woods','',2006,'Lucy McKee','US','English',72),
	('To the Bone','108',2017,'Marti Noxon','US','English',73),
	('Undergods','90',2020,'Chino Moya','UK, Belgium, Estonia, Serbia, Sweden','English',74),
	('Veronica','105',2017,'Paco Plaza','Spain','English',75),
	('We Need to Do Something','97',2021,'Sean King O\'Grady','US','English',76),
	('When Evil Lurks','',2023,'Demián Rugna','Argentina','Spanish',77),
	('When the Lights Went Out','86',2012,'Pat Holden','UK','English',78),
	('X','105',2022,'Ti West','US','English',79),
	('Yummy','96',2019,'Lars Damoiseaux','Belgium','Dutch/English',80),
	('The Sacrifice Game ','',2023,'Jenn Wexler','US','English',81),
	('The Puppetman','',2023,'Brandon Christensen','US','English',82),
	('Sea Fever','95',2019,'Neasa Hardiman ','Ireland','English ',83),
	('Motherly','',2021,'Craig David Wallace','Canada','English',84),
	('Pearl','',2022,'Ti West','US','English',85),
	('Belzebuth','115',2017,'Emilio Portes','Mexico','Spanish/English',86),
	('The Outfit','106',2022,'Graham Moore','US','English',87),
	('What Josiah Saw','',2021,'Vincent Grashaw','US','English',88),
	('A Dark Song','100',2016,'Liam Gavin','Ireland/UK','English',89),
	('Wrong Turn','109',2021,'Mike P Nelson','US, Germany,  Canada','English',90),
	('Paterson','118',2016,'Jim Jarmusch','US','English',91),
	('Only Lovers Left Alive','123',2013,'Jim Jarmusch','US','English',92),
	('The Woman King','',2022,'Gina Prince-Bythewood','US','English',93),
	('Gaia','96',2021,'Jaco Bouwer','South Africa','English/Afrikaans',94);

/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
