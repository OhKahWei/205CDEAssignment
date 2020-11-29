-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(100) NOT NULL,
  `MovieName` varchar(255) NOT NULL,
  `Summary` varchar(500) NOT NULL,
  `Director` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `averagerating` int(100) NOT NULL,
  `ReleaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `MovieName`, `Summary`, `Director`, `Images`, `averagerating`, `ReleaseDate`) VALUES
(0, 'Vanguard(2020)', 'Covert security company Vanguard is the last hope of survival for an accountant after he is targeted by the world\'s deadliest mercenary organization.', ' Stanley Tong', 'img/movie.jpg', 4, '2020-11-20'),
(1, 'Mulan(2020)', 'A young Chinese maiden disguises herself as a male warrior in order to save her father.', 'Niki Caro', 'img/movie1.jpg', 3, '2020-09-04'),
(2, 'Intruder(2020)', 'Seo-Jin is a popular architect. He suffers from a trauma when his younger sister Yoo-Jin went missing. 25 years after her disappearance, Yoo-Jin comes back to her family. Seo-Jin feels something is not right with Yoo-Jin.', 'Sohn Won-Pyung', 'img/movie2.jpg', 2, '2020-06-04'),
(3, 'Tenet(2020)', 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.', ' Christopher Nolan', 'img/movie3.jpg', 4, '2020-09-03'),
(4, 'Alive(2020)', 'The rapid spread of an unknown infection has left an entire city in ungovernable chaos, but one survivor remains alive in isolation. It is his story.', ' Il Cho', 'img/movie4.jpg', 4, '2020-09-08'),
(5, 'Train to Busan Presents: Peninsula (2020)', 'A zombie virus has in the last 4 years spread to all South Korea. 4 Koreans in HK sail thru the blockade to Incheon for USD20,000,000 on a truck.', 'Sang-ho Yeon', 'img/movie5.jpg', 4, '2020-08-07'),
(6, 'Extraction (2020)', 'Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career when he\'s enlisted to rescue the kidnapped son of an imprisoned international crime lord.', 'Sam Hargrave', 'img/movie6.jpg', 5, '2020-04-24'),
(7, 'The Old Guard (2020)', 'A covert team of immortal mercenaries is suddenly exposed and must now fight to keep their identity a secret just as an unexpected new member is discovered.', 'Gina Prince-Bythewood', 'img/movie7.jpg', 3, '2020-07-10'),
(8, 'Spenser Confidential (2020)', 'When two Boston police officers are murdered, ex-cop Spenser teams up with his no-nonsense roommate, Hawk, to take down criminals.', 'Peter Berg', 'img/movie8.jpg', 4, '2020-03-06'),
(9, 'The Bridge Curse (2020)', 'University students, planning a bravery initiation test for their fellow classmates, choose a campus bridge rumored to be haunted by a vengeful female ghost.', 'Lester Hsi (as Lester Shih)', 'img/movie9.jpg', 0, '2020-08-27'),
(10, 'Hitman: Agent Jun (2020)', 'While heavily drunk, an unsuccessful comic book writer draws a comic about his life as a former NIS hitman, and runs into trouble when it gets posted online.', ' Won-sub Choi', 'img/movie10.jpg', 0, '2020-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `movierating`
--

CREATE TABLE `movierating` (
  `MovieID` int(255) NOT NULL,
  `Movie` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `DateEntered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movierating`
--

INSERT INTO `movierating` (`MovieID`, `Movie`, `Email`, `Rating`, `DateEntered`) VALUES
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 2, '2020-11-23'),
(0, 'Train', 'ohkah@gmail.com', 5, '2020-11-23'),
(0, 'Extraction', 'chooliwey@gmail.com', 5, '2020-11-23'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 5, '2020-11-23'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 2, '2020-11-23'),
(5, 'Train', 'chooliwey@gmail.com', 5, '2020-11-23'),
(5, 'Train', 'ohkah@gmail.com', 2, '2020-11-23'),
(7, 'The', 'ohkahwei@gmail.com', 4, '2020-11-23'),
(7, 'The', 'mok@gmail.com', 2, '2020-11-23'),
(0, 'Vanguard(2020)', 'chooliwey@gmail.com', 4, '2020-11-23'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 5, '2020-11-23'),
(0, 'Vanguard(2020)', 'mok@gmail.com', 5, '2020-11-23'),
(0, 'Vanguard(2020)', 'test@gmail.com', 5, '2020-11-23'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 1, '2020-11-23'),
(0, 'Vanguard(2020)', 'test1@gmail.com', 0.9, '2020-11-23'),
(0, 'Vanguard(2020)', 'mok@gmail.com', 1, '2020-11-23'),
(1, 'Mulan(2020)', 'ohkahwei@gmail.com', 5, '2020-11-23'),
(0, 'Mulan(2020)', 'chooliwey@gmail.com', 1, '2020-11-23'),
(1, 'Mulan(2020)', 'mok@gmail.com', 1, '2020-11-23'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 4, '2020-11-26'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 5, '2020-11-27'),
(2, 'Intruder(2020)', 'ohkahwei@gmail.com', 0, '2020-11-27'),
(2, 'Intruder(2020)', 'ohkahwei@gmail.com', 4, '2020-11-27'),
(3, 'Tenet(2020)', 'chooliwey@gmail.com', 4, '2020-11-27'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 4.9, '2020-11-27'),
(4, 'Alive(2020)', 'ohkahwei@gmail.com', 4, '2020-11-27'),
(4, 'Alive(2020)', 'ohkahwei@gmail.com', 4, '2020-11-27'),
(4, 'Alive(2020)', 'mok@gmail.com', 4, '2020-11-27'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 4, '2020-11-27'),
(0, 'Vanguard(2020)', 'ohkahwei@gmail.com', 4, '2020-11-27'),
(8, 'Spenser', 'ohkahwei@gmail.com', 4, '2020-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
