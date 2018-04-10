-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-04-2018 a las 01:21:14
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(125) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_movie`
--

DROP TABLE IF EXISTS `tbl_movie`;
CREATE TABLE IF NOT EXISTS `tbl_movie` (
  `movie_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_poster` varchar(30) NOT NULL,
  `movie_thumb` varchar(50) NOT NULL,
  `movie_name` varchar(300) NOT NULL,
  `movie_year` varchar(60) NOT NULL,
  `movie_run` varchar(40) NOT NULL,
  `movie_story` text NOT NULL,
  `movie_trailer` varchar(30) NOT NULL,
  `movie_release` varchar(30) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_movie`
--

INSERT INTO `tbl_movie` (`movie_id`, `movie_poster`, `movie_thumb`, `movie_name`, `movie_year`, `movie_run`, `movie_story`, `movie_trailer`, `movie_release`) VALUES
(1, 'annihilation.jpg', '', 'Annihilation', '2018', '1h 55min', 'A biologist signs up for a dangerous, secret expedition into a mysterious zone where the laws of nature don&#039;t apply.', 'annihilation.mp4', 'March 12, 2018'),
(21, 'silent.jpg', 'th_silent.jpg', 'Koe no katachi', '2016', '2h 9min', 'A young man is ostracized by his classmates after he bullies a deaf girl to the point where she moves away. Years later, he sets off on a path for redemption.', 'silentvoice.mp4', 'March 16, 2018'),
(2, 'blackpanther.jpg', '', 'Black Panther', '2018', '2h 14min', 'T\'Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T\'Challa\'s father\'s mistake.', 'blackpanther.mp4', 'February 16, 208'),
(3, 'blockers.jpg', '', 'Blockers', '2018', '1h 42min', 'Julie, Kayla and Sam are three high school seniors who make a pact to lose their virginity on prom night. Lisa, Mitchell and Hunter are three overprotective parents who flip out when they find out about their daughters\' plans. They soon join forces for a wild and chaotic quest to stop the girls from sealing the deal -- no matter what the cost.', 'blockers.mp4', 'April 6, 2018'),
(4, 'blue.jpg', '', 'Blue is the Warmest Color', '2013', '3h', 'Ad&egrave;le\'s life is changed when she meets Emma, a young woman with blue hair, who will allow her to discover desire and to assert herself as a woman and as an adult. In front of others, Ad&egrave;le grows, seeks herself, loses herself, and ultimately finds herself through love and loss.', 'blue.mp4', 'October 9,2013'),
(5, 'coco.jpg', '', 'Coco', '2017', '1h 45min', 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.', 'coco.mp4', 'December 1, 2017'),
(6, 'dorado.jpg', '', 'The Road to El Dorado', '2000', '1h 29min', 'Two con-men (Kevin Kline, Kenneth Branagh) get hold of a map to the lost City of Gold, El Dorado. After stowing away onto one of the ships of the Spanish explorer Cortez, the pair escapes and eventually do find the city. There, a priest (Armand Assante) proclaims them to be gods in a scheme to win control of the city for himself. Meanwhile, they meet a beautiful girl (Rosie Perez) who helps them in their ruse.', 'dorado.mp4', 'October 16, 2000'),
(7, 'fma2017.jpg', '', 'Fullmetal Alchemist', '2017', '2h 15min', 'Brothers Edward and Alphonse Elric attempt the forbidden technique of human transmutation and suffer the consequences.', 'fma2017.mp4', 'December 1, 2017'),
(8, 'godsnotdead.jpg', '', 'God\'s Not Dead: A Light in Darkness', '2018', '1h 45min', 'The Rev. Dave Hill faces an unexpected setback when his beloved church burns down -- prompting the officials at the adjoining university to try and kick his congregation off campus. Battle lines are quickly drawn between the church and the community as the reverend now finds himself at odds with his longtime friend -- the president of the school. Facing a legal battle, Hill soon seeks help from his estranged brother -- a big-city lawyer and atheist -- in a fight to help rebuild the church.', 'godsnotdead.mp4', 'March 30, 2018'),
(9, 'greatestshowman.jpg', '', 'The Greatest Showman', '2017', '1h 45min', 'Celebrates the birth of show business, and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.', 'greatestshowman.mp4', 'December 29, 2017'),
(10, 'jumanji2.jpg', 'th_jumanji2.jpg', 'Jumanji: Welcome to the Jungle', '2017', '1h 59min', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.', 'jumanji2.mp4', 'December 22, 2017'),
(11, 'justiceleague.jpg', 'th_justiceleague.jpg', 'Justice League', '2017', '2h', 'Fueled by his restored faith in humanity and inspired by Superman&#039;s selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy.', 'justiceleague.mp4', 'November 17, 2017'),
(12, 'miesrables.jpg', '', 'Les Mis&eacute;rables', '2012', '2h 38min', 'In 19th-century France, Jean Valjean, who for decades has been hunted by the ruthless policeman Javert after breaking parole, agrees to care for a factory worker\'s daughter. The decision changes their lives forever.', 'miesrables.mp4', 'December 25, 2012'),
(13, 'moana.jpg', '', 'Moana', '2016', '1h 47min', 'In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana\'s island, she answers the Ocean\'s call to seek out the Demigod to set things right.', 'moana.mp4', 'December 2, 2016'),
(14, 'monsters.jpg', '', 'Monsters, Inc', '2001', '1h 32min', 'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, 2 monsters realize things may not be what they think.', 'monsters.mp4', 'November 2, 2001'),
(15, 'onlyimagine.jpg', 'th_onlyimagine.jpg', 'I Can Only Imagine', '2018', '1h 50min', 'The inspiring and unknown true story behind MercyMe&#039;s beloved, chart topping song that brings ultimate hope to so many is a gripping reminder of the power of true forgiveness.', 'onlyimagine.mp4', 'March 16, 2018'),
(16, 'pacificrim2.jpg', 'th_pacificrim2.jpg', 'Pacific Rim: Uprising', '2018', '1h 51min', 'Jake Pentecost, son of Stacker Pentecost, reunites with Mako Mori to lead a new generation of Jaeger pilots, including rival Lambert and 15-year-old hacker Amara, against a new Kaiju threat.', 'pacificrim2.mp4', 'March 28, 2018'),
(17, 'quietplace.jpg', 'th_quietplace.jpg', 'A Quiet Place', '2018', '1h 30min', 'A family is forced to live in silence while hiding from creatures that hunt by sound.', 'quietplace.mp4', 'April 8, 2018'),
(18, 'rings.jpg', 'th_rings.jpg', 'Rings', '2017', '1h 42min', 'A young woman finds herself on the receiving end of a terrifying curse that threatens to take her life in 7 days.', 'rings.mp4', 'February 10, 2017'),
(19, 'tombraider2018.jpg', 'th_tombraider2018.jpg', 'Tomb Raider', '2018', '1h 58min', 'Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she finds herself on the island where her father disappeared.', 'tombraider2018.mp4', 'March 16, 2018'),
(20, 'wreckitralph.jpg', 'th_wreckitralph.jpg', 'Wreck it Ralph', '2012', '1h 41min', 'A video game villain wants to be a hero and sets out to fulfill his dream, but his quest brings havoc to the whole arcade where he lives.', 'ralph.mp4', 'December 25, 2012'),
(22, 'name.jpg', 'th_name.jpg', 'Kimi no na wa', '2016', '1h 46min', 'Two strangers find themselves linked in a bizarre way. When a connection forms, will distance be the only thing to keep them apart?', 'name.mp4', 'October 16, 2016'),
(23, 'rpo.jpg', 'th_rpo.jpg', 'Ready Player One', '2018', '2h 20min', 'When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.', 'rpo.mp4', 'March 29, 2018'),
(24, 'yugi2016.jpg', 'th_yugi2016.jpg', 'Yu-Gi-Oh!: The Dark Side of Dimensions', '2016', '2h 10min', 'Yugi and Kaiba have a special duel that transcends dimensions.', 'yugi2016.mp4', 'April 23, 2016'),
(25, 'veronica.jpg', 'th_veronica.jpg', 'Veronica', '2017', '1h 45min', 'Madrid, 1991. A teen girl finds herself besieged by an evil supernatural force after she played Ouija with two classmates.', 'veronica.mp4', 'August 27, 2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_movie_genre`
--

DROP TABLE IF EXISTS `tbl_movie_genre`;
CREATE TABLE IF NOT EXISTS `tbl_movie_genre` (
  `mg_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_id` smallint(6) NOT NULL,
  `genre_id` int(11) NOT NULL,
  PRIMARY KEY (`mg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` varchar(70) DEFAULT NULL,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_attempts` tinyint(4) NOT NULL,
  `user_lvl` varchar(50) DEFAULT NULL,
  `user_log` smallint(6) DEFAULT NULL,
  `user_newt` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_attempts`, `user_lvl`, `user_log`, `user_newt`) VALUES
(4, 'hola', 'qtal', 'comowas', 'yolo@kavida', '2018-02-22 01:07:13', '::1', 0, '0', NULL, NULL),
(6, 'hola', 'user', 'yes', 'yelel@lek', NULL, 'no', 0, '2', NULL, NULL),
(19, 'hk', 'hyu', 'RNiRvA7q', 'hl', NULL, 'no', 0, '2', NULL, NULL),
(20, 'lol', 'wow', '', 'gol@gmail', NULL, 'no', 0, '2', NULL, NULL),
(21, 'gyul', 'h', '', 'hjuk', NULL, 'no', 0, '2', NULL, NULL),
(23, 'hilil', 'hil', '9+EU::7abef9d45705c3055a902fffe60ef1bc', 'lol@lol', '2018-03-01 00:01:06', '::1', 0, '1', 2, NULL),
(24, 'Camila', 'kmi', 'yolo', 'yolo', '2018-02-28 10:41:00', '::1', 0, '2', NULL, NULL),
(25, 'hola', 'fal', 'Ieh8::f7447f4965dc2994aa77a1b6672f1967', 'lol@fal', '2018-03-01 10:29:35', '::1', 0, '2', 1, NULL),
(27, 'Prueba2', 'pro2', '0Vgc::fb297ec54ea05a6c52c78b65bd886b36', 'yolo@pro2', '2018-02-28 23:53:22', '::1', 0, '2', 1, NULL),
(28, 'Prueba3', 'pro3', 'lefI::222da3f335e9c363b5a8ef1c2e641935', 'lol@pro3', '2018-02-28 23:56:22', '::1', 0, '2', 1, NULL),
(29, 'hola2', 'gol', 'aWs8::04e14cde21fc7207add3c1464ca2c452', 'lol', '2018-02-28 23:58:57', '::1', 0, '2', 3, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
