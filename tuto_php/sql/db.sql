CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `article` (

    `id` int(11) NOT NULL,

    `title` varchar(100) NOT NULL,

    `content` text NOT NULL,

    `author` varchar(100) NOT NULL,

    `created_at` datetime NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `article` (`id`, `title`, `content`,  `author`, `created_at`) VALUES

    (1, 'Voici le premier article de ce blog', 'Mon super blog est en construction', 'Karim', '2019-03-15 08:10:24'),

    (2, 'Voici le second article', 'Mon super blog s\' enrichie', 'Karim', '2019-04-15 08:10:44'),
    
    (3, "Mon troisieme article", 'Mon super blog devient beau et complet !', 'Karim', '2019-05-15 08:10:00');


ALTER TABLE `article` 

    ADD PRIMARY KEY (`id`);

ALTER TABLE `article` 

MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

