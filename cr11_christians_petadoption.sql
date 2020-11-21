-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Nov 2020 um 13:57
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_christians_petadoption`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animals`
--

CREATE TABLE `animals` (
  `animal_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(25) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `animals`
--

INSERT INTO `animals` (`animal_id`, `name`, `type`, `age`, `image`, `description`, `hobbies`, `location`) VALUES
(9, 'Hansi', 'Large', 4, 'https://images.unsplash.com/photo-1459682687441-7761439a709d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1410&q=80', 'The dog (Canis familiaris when considered a distinct species or Canis lupus familiaris when considered a subspecies of the wolf)[5] is a domesticated carnivore of the family Canidae. It is part of the wolf-like canids,[6] and is the most widely abundant terrestrial carnivore.', 'Chasing Balls, Howl', 'Landstraße 10, 1030, Wien'),
(11, 'Seppl', 'Senior', 15, 'https://images.unsplash.com/photo-1583205188670-ce90796eb01c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80', 'A pig is any of the animals in the genus Sus, within the even-toed ungulate family Suidae. Pigs include domestic pigs and their ancestor, the common Eurasian wild boar (Sus scrofa), along with other species. Pigs, like all suids, are native to the Eurasian and African continents, ranging from Europe to the Pacific islands. Suids other than the pig are the babirusa of Indonesia, the pygmy hog of Asia, the warthog of Africa, and another genus of pigs from Africa. The suids are a sister clade to peccaries. ', 'playing in the mud, run', 'Karlsplatz 1, 1050, Wien'),
(19, 'Hans', 'Small', 3, 'https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=939&q=80', 'Hans is a small dog', 'Chasing Balls, Howl', 'xyz-street 3, 1210, Wien'),
(20, 'Mimi', 'Small', 4, 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1327&q=80', 'Mimi is a small cat', 'sleeping, hunting, playing with prey', 'xyz-street 13, 1210, Wien'),
(21, 'Nilserino', 'Large', 4, 'https://images.unsplash.com/flagged/photo-1557296126-ae91316e5746?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'Nilserino is a large Horse', 'Running! Kicking!', 'xyz-street 11, 1210, Wien'),
(22, 'Anni', 'Large', 4, 'https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80', 'a large Dog', 'Chasing Balls, Howl', 'xyz-street 11, 1210, Wien'),
(23, 'Basti', 'Large', 3, 'https://images.unsplash.com/photo-1567628065503-ff37adadbc96?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80', 'a very large animal', 'swimming', 'Oceanstreet, Vienna, 1210'),
(24, 'Schnitzel', 'Small', 2, 'https://images.unsplash.com/photo-1583205188670-ce90796eb01c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=975&q=80', 'Schnitzel is small', 'doing pig things', 'xyz-street 33, 1210, Wien'),
(25, 'Siglinde', 'Small', 1, 'https://images.unsplash.com/photo-1565618953310-18439a7d4609?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1271&q=80', 'a small animal', 'doing animal things', 'xyz-street 13, 1210, Wien'),
(26, 'Lara', 'Senior', 33, 'https://images.unsplash.com/photo-1552728089-57bdde30beb3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80', 'animals are nice', 'stuff', 'xyz-street 13, 1210, Wien'),
(27, 'Pamara', 'Senior', 44, 'https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80', 'any', 'any', 'Wallensteinplatz 12, 1200, Wien'),
(28, 'Lora', 'Senior', 45, 'https://images.unsplash.com/photo-1511823794984-b87716139b88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=941&q=80', 'thats an animal', 'doing stuff on time', 'Wallensteinplatz 24, 1200, Wien');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userPass` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `userName`, `userEmail`, `userPass`, `admin`) VALUES
(2, 'Dattel', 'dattel@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(4, 'Superadmin', 'super@admin.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 3);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
