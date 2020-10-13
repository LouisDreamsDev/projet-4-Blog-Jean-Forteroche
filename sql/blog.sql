-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 08:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `createdAt`, `user_id`) VALUES
(10, 'Chapitre 1 : S\'appeler soi-même', '<p>Asseyez-vous par terre au milieu d&rsquo;une pi&egrave;ce calme, de pr&eacute;f&eacute;rence peu meubl&eacute;e. Demeurez tout d&rsquo;abord quelques instants attentif au silence, sachant que vous allez parler et entendre. En &eacute;coutant intens&eacute;ment les tr&egrave;s l&eacute;gers bruits qui vous entourent, pensez que bient&ocirc;t cette paix va cesser. Pr&eacute;parez-vous &agrave; l&rsquo;irruption d&rsquo;une parole.</p>\r\n<p>Prononcez alors &agrave; voix haute votre pr&eacute;nom. Articulez distinctement, et r&eacute;p&eacute;tez, insistez. Comme si vous deviez h&eacute;ler, d&rsquo;assez loin, une personne demeurant sourde &agrave; vos appels. Imaginez que vous interpellez quelqu&rsquo;un qui vous conna&icirc;t, mais ne vous aper&ccedil;oit pas. De l&rsquo;autre c&ocirc;t&eacute; d&rsquo;un champ. Ou bien d&rsquo;une rive vers un bateau. Ou encore d&rsquo;une maison &agrave; une autre.</p>\r\n<p>Au d&eacute;but, les quinze ou vingt premi&egrave;res fois, vous avez l&rsquo;impression d&rsquo;&ecirc;tre simplement en train de parler dans le vide. Vous appelez quelqu&rsquo;un d&rsquo;absent, d&rsquo;inaccessible, d&rsquo;une mani&egrave;re absurde et ridicule. Vous avez beau allonger les voyelles, prononcer les syllabes sur des tons diff&eacute;rents, vous n&rsquo;arrivez pas &agrave; y croire. Continuez. La porte est bien ferm&eacute;e.</p>\r\n<p>Peu &agrave; peu, vous commencez &agrave; ressentir l&rsquo;impression d&rsquo;&ecirc;tre appel&eacute;. De mani&egrave;re d&rsquo;abord confuse, &agrave; peine perceptible. H&eacute;sitante, mal assur&eacute;e. C&rsquo;est l&agrave; qu&rsquo;il convient de s&rsquo;installer, attentif &agrave; cet &eacute;quilibre instable entre le dedans et le dehors. Insistez, r&eacute;p&eacute;tez, appelez-vous encore quelques dizaines de fois, machinalement, automatiquement. C&rsquo;est bien votre voix. C&rsquo;est aussi celle de l&rsquo;autre, l&agrave;-bas. Vous venez juste de l&rsquo;apercevoir.</p>\r\n<p>Votre voix n&rsquo;est pas d&eacute;doubl&eacute;e. Et bien s&ucirc;r vous non plus. Vous sentez toutefois que vous &ecirc;tes double, scind&eacute; en quelque sorte au-dedans. C&rsquo;est bien vous qui appelez, mais vous ne savez pas qui. C&rsquo;est bien vous qui &ecirc;tes appel&eacute;, mais vous ne savez pas d&rsquo;o&ugrave;. Ou plut&ocirc;t si, &eacute;videmment, vous savez bien que c&rsquo;est vous dans les deux cas, et &laquo;&nbsp;vous&nbsp;&raquo;, vous supposez que &ccedil;a ne fait qu&rsquo;un. D&rsquo;ailleurs, vous le savez, et l&agrave;-dessus tout le monde est d&rsquo;accord. Mais non, justement, ce n&rsquo;est pas ce que vous &eacute;prouvez &agrave; pr&eacute;sent. Vous savez bien que &laquo;&nbsp;vous&nbsp;&raquo; et &laquo;&nbsp;vous&nbsp;&raquo; ne font qu&rsquo;un, mais vous ne le ressentez plus de mani&egrave;re pleine, &eacute;vidente. Celui qui appelle est le m&ecirc;me, et n&rsquo;est pas le m&ecirc;me, que celui qui est appel&eacute;.</p>\r\n<p>L&rsquo;exp&eacute;rience consiste &agrave; prolonger quelques instants ce jeu du dedans et du dehors, de l&rsquo;appel et de l&rsquo;&eacute;coute. Il faut &eacute;prouver, aussi loin que possible, ce qu&rsquo;a d&rsquo;insolite ce pr&eacute;nom que l&rsquo;on conna&icirc;t, mais que jamais on ne peut adresser &agrave; soi-m&ecirc;me sans justement se sentir un autre. Seuls les autres, &eacute;videmment, vous nomment ainsi, et vous-m&ecirc;me, en temps normal, ne vous appelez jamais. Continuez &agrave; vous h&eacute;ler, &agrave; intervalles r&eacute;guliers, en criant presque certaines fois. Le but est de susciter ce l&eacute;ger malaise, pas forc&eacute;ment d&eacute;sagr&eacute;able, qui accompagne un petit d&eacute;collement de soi par rapport &agrave; soi. Se maintenir un moment dans cette situation de fin vertige.</p>\r\n<p>Comment en sortir&nbsp;? De quelle mani&egrave;re colmater l&rsquo;&eacute;cart, recoller les bords&nbsp;?</p>\r\n<p>Dites simplement, d&rsquo;une voix haute et forte, avec le plus grand naturel possible&nbsp;: &laquo;&nbsp;Oui&nbsp;! J&rsquo;arrive&nbsp;!&nbsp;&raquo;</p>', '2020-10-01 21:48:34', 10),
(12, 'Chapitre 2 : Voir les étoiles en bas', '<p>De pr&eacute;f&eacute;rence une nuit d&rsquo;&eacute;t&eacute;. Elle devrait &ecirc;tre sans nuages. C&rsquo;est mieux encore si vous avez un jardin, de quoi vous allonger au sec, et devant vous environ une heure.</p>\r\n<p>Vous voil&agrave; donc sur le dos. Vous regardez les &eacute;toiles, leur nombre immobile, leur &eacute;tranget&eacute; large. Il faut que vous parveniez &agrave; vous sentir &agrave; la fois intimid&eacute; et cependant &agrave; l&rsquo;aise, pris dans la pr&eacute;sence rassurante et myst&eacute;rieuse de la nuit.</p>\r\n<p>Ici, tous les clich&eacute;s valent&nbsp;: la douceur laiteuse, la ti&eacute;deur du noir, le scintillement qui fait se sentir tout petit. Tous les poncifs sont &agrave; leur place. Surtout n&rsquo;h&eacute;sitez pas &agrave; vous y laisser prendre, &agrave; vous y plonger jusqu&rsquo;au cou.</p>\r\n<p>Attendez le temps qu&rsquo;il faudra, jusqu&rsquo;au moment o&ugrave; na&icirc;t le sentiment d&rsquo;&ecirc;tre riv&eacute; au sol, presque &eacute;cras&eacute; par l&rsquo;immensit&eacute;, point minuscule avec au-dessus de soi l&rsquo;infini.</p>\r\n<p>L&rsquo;exp&eacute;rience consiste simplement &agrave; faire basculer l&rsquo;univers. Progressivement, vous allez vous convaincre que les &eacute;toiles que vous voyez sont en dessous de vous. Vous les surplombez. Vous &ecirc;tes retenu &agrave; la terre par une force imp&eacute;rieuse. Mais ce ciel immense est en bas. Cet ab&icirc;me d&rsquo;&eacute;toiles, vous le survolez, au risque d&rsquo;y tomber sans fin.</p>\r\n<p>Cela ne marche pas aussit&ocirc;t. Il faut une accommodation, une attention flottante, plut&ocirc;t qu&rsquo;un effort net. Le processus ressemble &agrave; celui des images en trois dimensions. On regarde longtemps une feuille plane couverte de signes qui paraissent non seulement lisses mais inintelligibles. Il faut endurer l&rsquo;attente. Et puis, soudain, tout bascule.</p>\r\n<p>Vous sentez qu&rsquo;effectivement tout est en dessous.</p>\r\n<p>Il suffirait d&rsquo;un rien, un souffle, une br&egrave;ve interruption de l&rsquo;attraction, un moment d&rsquo;inattention peut-&ecirc;tre, pour que vous partiez tr&egrave;s lentement &agrave; la d&eacute;rive, entre terre et rien, &agrave; la descente du ciel.</p>\r\n<p>En vous relevant, assez lentement, prenez garde &agrave; la marche.</p>', '2020-10-06 18:20:35', 10),
(13, 'Chapitre 3 : Vider le sens d\'un mot', '<p>&Ccedil;a peut &ecirc;tre n&rsquo;importe o&ugrave;, et sans heure particuli&egrave;re. Il suffit, cette fois encore, que vous soyez s&ucirc;r de n&rsquo;&ecirc;tre pas entendu. Mieux vaut n&rsquo;&ecirc;tre pas g&ecirc;n&eacute;, en cours de route, par la crainte du ridicule. Parler seul n&rsquo;est rien. &Ecirc;tre &eacute;pi&eacute; et moqu&eacute; troublerait le r&eacute;sultat recherch&eacute;.</p>\r\n<p>Donc, simplement quelque lieu o&ugrave; personne ne vous entend. Prenez ce que vous avez sous la main, l&rsquo;objet le plus courant, un crayon, une montre, un verre, ou m&ecirc;me une pi&egrave;ce de votre v&ecirc;tement, bouton ou ceinture, poche ou lacet. Peu importe. Il suffit d&rsquo;une chose banale. Sa d&eacute;nomination est habituelle, sa pr&eacute;sence est famili&egrave;re. &Agrave; cet objet correspond pour vous, depuis toujours, le m&ecirc;me mot. Identique, naturel, normal.</p>\r\n<p>Prenez donc en main cette petite chose sans malice, sans &eacute;tranget&eacute;, sans risque. R&eacute;p&eacute;tez son nom, &agrave; voix basse, en la regardant. Fixez, par exemple, le crayon qui est entre vos doigts en r&eacute;p&eacute;tant&nbsp;: &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;, &laquo;&nbsp;crayon&nbsp;&raquo;. Vous pouvez continuer encore. Ce ne devrait pas &ecirc;tre long. En quelques instants, le mot familier se d&eacute;colle, se racornit. Vous ressassez une suite de sons &eacute;tranges. S&eacute;rie de bruits absurdes, insignifiants, qui ne d&eacute;nomment rien, ne d&eacute;signent aucune chose et demeurent insens&eacute;s, fluides ou r&acirc;peux.</p>\r\n<p>Sans doute avez-vous d&eacute;j&agrave; jou&eacute; ainsi, enfant. Tous ou presque, nous avons &eacute;prouv&eacute;, comme &ccedil;a, l&rsquo;extr&ecirc;me fragilit&eacute; du lien entre mots et choses. D&egrave;s qu&rsquo;on le tord ou le tire, d&egrave;s qu&rsquo;on le distend, ce lien cesse d&rsquo;&ecirc;tre simple. Il s&rsquo;entortille ou se brise. Le terme se dess&egrave;che, s&rsquo;&eacute;miette. Coquille &eacute;parpill&eacute;e d&rsquo;inanit&eacute; sonore.</p>\r\n<p>Ce qui arrive &agrave; l&rsquo;objet n&rsquo;est pas moins &eacute;tonnant. Il semble que sa mati&egrave;re devienne plus &eacute;paisse, plus dense, plus brute. La chose est l&agrave; davantage et autrement, dans son &eacute;tranget&eacute; innommable, d&egrave;s qu&rsquo;elle tombe en dehors du fin filet des vocables habituels.</p>\r\n<p>Ce vieux jeu dissociatif, il faut le r&eacute;p&eacute;ter. Tenter d&rsquo;observer la fuite m&ecirc;me du sens, l&rsquo;&eacute;mergence r&ecirc;che du r&eacute;el hors des mots. Entrevoir l&rsquo;&eacute;caille sous la prose. Redire plusieurs fois le m&ecirc;me mot, pour la m&ecirc;me chose, dissipe toute signification. N&rsquo;est-ce pas merveilleux&nbsp;? Effrayant&nbsp;? Dr&ocirc;le&nbsp;? Quelques instants suffisent pour fissurer cette fine pellicule o&ugrave; nous nous tenons en place, satisfaits de pouvoir dire le nom des choses.</p>', '2020-10-07 18:21:08', 10),
(14, 'Chapitre 4 : Faire durer le monde 20 minutes', '<p>Le pass&eacute; s&rsquo;incruste. Le voici dans les moindres gestes. Il se love dans les pens&eacute;es, m&ecirc;me celles qui apparemment ne semblent pas se soucier de lui. L&rsquo;avenir, lui aussi, ne cesse de soutenir le moindre projet. Il accompagne nos plus infimes anticipations.</p>\r\n<p>Que se passerait-il si nous tentions &ndash; m&ecirc;me illusoirement, &agrave; peine, pour jouer &ndash; de d&eacute;faire ces terribles contraintes&nbsp;? Imaginons donc, autant qu&rsquo;il est possible, que le pass&eacute; n&rsquo;a jamais eu lieu et que l&rsquo;avenir n&rsquo;existe pas. Essayons de croire que ce monde, tel qu&rsquo;il est, ne dure que vingt minutes. Il a &eacute;t&eacute; constitu&eacute; d&rsquo;embl&eacute;e, juste &agrave; l&rsquo;instant, tel quel, nous compris. &Agrave; la minute pr&eacute;c&eacute;dente, il n&rsquo;existait pas. Tout ce que le monde contient pr&eacute;sentement comme vestiges, ruines antiques, biblioth&egrave;ques, monuments, archives, souvenirs proches ou lointains, tout cela vient d&rsquo;appara&icirc;tre en m&ecirc;me temps. Les archives sont bien l&agrave;, les t&eacute;moins aussi, mais le pass&eacute; dont ils parlent n&rsquo;a jamais exist&eacute; autrement qu&rsquo;&agrave; l&rsquo;instant.</p>\r\n<p>Ce monde &ndash; infini, divers, multiple &ndash; poss&egrave;de une dur&eacute;e de vie limit&eacute;e &agrave; vingt minutes exactement. Au-del&agrave; il dispara&icirc;tra totalement, d&eacute;finitivement. Pas de d&eacute;flagration gigantesque, aucune explosion cosmique. Pas d&rsquo;embrasement insens&eacute; ni de fournaise immense. Rien qu&rsquo;une extinction brusque. Comme s&rsquo;&eacute;vanouit une bulle de savon, comme cesse soudain de briller une lumi&egrave;re.</p>\r\n<p>Installez-vous dans ce monde de vingt minutes. Constatez combien il est, en un sens, identique au n&ocirc;tre&nbsp;: m&ecirc;mes volumes, m&ecirc;mes cieux. Aucun objet ne diff&egrave;re. Les m&ecirc;mes gens font les m&ecirc;mes choses. Voyez&nbsp;: ce n&rsquo;est pourtant pas du tout le m&ecirc;me univers. Ce monde auquel manquent la profondeur d&rsquo;un pass&eacute; r&eacute;el et la perspective d&rsquo;un avenir envisageable peut bien para&icirc;tre tout &agrave; fait identique, il n&rsquo;en diff&egrave;re pas moins radicalement du n&ocirc;tre &agrave; cause de cette limite temporelle. Avant que cet univers &eacute;ph&eacute;m&egrave;re n&rsquo;ait totalement disparu, efforcez-vous de comprendre, vous qui avez l&rsquo;illusion qu&rsquo;une autre r&eacute;alit&eacute; a exist&eacute; et existera, combien votre pens&eacute;e est diff&eacute;rente de cette existence minut&eacute;e. Plus vous &eacute;prouverez cet &eacute;cart et cette distance, plus vous pourrez sentir l&rsquo;importance, pour nous, de l&rsquo;imm&eacute;morial et de l&rsquo;horizon du futur.</p>\r\n<p>&Agrave; l&rsquo;approche du terme fatidique des vingt minutes, vous devez ressentir furtivement la terreur sourde que tout, effectivement, disparaisse.</p>\r\n<p>Il est probable qu&rsquo;il n&rsquo;en sera rien. Vous pourrez donc sortir, &agrave; la vingt et uni&egrave;me minute, de cette frayeur sans objet. Vous vous efforcerez alors de go&ucirc;ter le soulagement que le monde continue.</p>\r\n<p>Vous trouverez peut-&ecirc;tre ensuite, comme un arri&egrave;re-go&ucirc;t, la d&eacute;ception secr&egrave;te que rien ne se soit aboli.</p>\r\n<p>Mauvais joueur&hellip;</p>', '2020-10-07 18:21:56', 10);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `createdAt`, `flag`, `article_id`) VALUES
(1, 'Jean', 'je suis un commentaire', '2020-10-04 12:15:44', 0, 10),
(15, 'user0', 'je suis un autre commentaire.', '2020-10-04 12:44:37', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(0, 'admin'),
(1, 'utilisateur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `createdAt` datetime NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `createdAt`, `role_id`) VALUES
(10, 'user0', '$2y$10$451QWe2gYIRMI6/YkuYF/OfyGuVlNivB1MV1Dq/J3t2X8TmFBomye', '2020-10-01 11:22:38', 0),
(17, 'test', '$2y$10$mbeyhg3VQKcIXTK1xpkkROwpylAbXCUuShl9CZp4c1a5MOUmU3vgy', '2020-10-08 23:54:10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_id` (`article_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
