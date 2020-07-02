-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 04:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookschmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(6) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `hashPassword` varchar(255) NOT NULL,
  `accountType` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstName`, `lastName`, `email`, `dateOfBirth`, `hashPassword`, `accountType`, `createdAt`) VALUES
(34, 'Santa', 'Paws', 'santapaws@creator.com', '2001-02-09', '$2y$10$e.WO7olyicuCLj4xJXG5re9a/v.kzY.kUKmYzdGSG1Ftz9QAhGVCK', 'creator', '2019-02-28 11:39:22'),
(51, 'Chew', 'Barka', 'chewbarka@creator.com', '2001-02-01', '$2y$10$C4.h9TKu2oCmELUZCWv1uedmzjn7pZy6zadv/5qiMCogtKGU9j9a.', 'creator', '2019-03-02 14:18:26'),
(53, 'John', 'Doe', 'johndoe@user.com', '2001-09-20', '$2y$10$en3ATZXKITxIqgXuVHoxLe9OblmNyPRfw2zdfLj/vSxi2SFWVkedq', 'user', '2019-03-03 20:38:35'),
(54, 'Jane', 'Doe', 'janedoe@user.com', '1998-08-31', '$2y$10$ipJEHtQvBRzbmI7o96tl.eLNmmNamr9VIPrEAyz/8pdE5yCqkcDAW', 'user', '2019-03-06 12:23:55'),
(55, 'Spikey', 'Doe', 'spikeydoe@user.com', '2009-09-01', '$2y$10$BM1K02lkdpKvAosddP6tQeteyE1kN/GwRqsBgUrkJ13MgWJJMqkIO', 'user', '2019-03-06 12:25:34'),
(56, 'Winnie', 'Doe', 'winniedoe@user.com', '2003-09-28', '$2y$10$5kUZEKc6koVSV2BC71Tn2urDhMnebHd4TnTrdw2zmsISvwnm.RThO', 'user', '2019-03-06 12:27:21'),
(57, 'Ozzy', 'Doe', 'ozzydoe@user.com', '2006-02-09', '$2y$10$dM7sworNSd8f1PJynkGQJ.Ruz7SNSxWZe3IyeYgn2wdGlN7feSLXS', 'user', '2019-03-06 12:28:45'),
(58, 'Mary', 'Puppins', 'marypuppins@creator.com', '1992-02-02', '$2y$10$cH7nrRQwNKJ4zDNQnpSEo.cZ1NCwew7HTWGLLSMXKedsl3voLSWd2', 'creator', '2019-03-06 12:33:26'),
(59, 'Sherlock', 'Bones', 'sherlockbones@creator.com', '2001-02-01', '$2y$10$cWHVaFTSp1bOUYIf05hHi.W2s/6UDVXIbXeyWAxs.2fFs8iQxL/xm', 'creator', '2019-03-06 12:35:17'),
(60, 'Waldo', 'Puck', 'waldopuck@creator.com', '1990-02-02', '$2y$10$tpKA6iHdAPYnCfF5q2q3E.xWDVjNQKeKAPluHKtPmpT5fLjh24GpC', 'creator', '2019-03-06 12:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(6) NOT NULL,
  `accountsID` int(6) DEFAULT NULL,
  `addressLine1` varchar(1000) NOT NULL,
  `addressLine2` varchar(255) NOT NULL,
  `addressLine3` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `accountsID`, `addressLine1`, `addressLine2`, `addressLine3`, `country`, `createdAt`) VALUES
(9, 53, '123', 'NY', '', 'USA', '2019-03-08 12:00:25'),
(12, 53, '12', '', '', 'USA', '2019-03-08 12:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` varchar(13) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(2500) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `imageName` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `author`, `title`, `description`, `genre`, `imageName`, `createdAt`) VALUES
('2131131109874', 'Dan Brown', 'Inferno', 'Inferno is a 2013 mystery thriller novel by American author Dan Brown and the fourth book in his Robert Langdon series', 'Fiction', '5c7bbf31ef877.jpg', '2019-03-03 14:49:05'),
('8831131109874', 'Dan Brown', 'Deception Point', 'Deception Point is Dan Brown\\\\\\\'s third novel, relesed in 2001.', 'Fiction', '5c7bbeee13033.jpg', '2019-03-03 14:47:58'),
('9038441109874', 'Nora Roberts', 'Secret Star', 'This is the final story in the Stars of Mithra trilogy and the writing is up to the high Nora Roberts standard.', 'Romance', '5c7bb8ce5cae9.jpg', '2019-03-03 14:21:50'),
('9038441119874', 'Nora Roberts', 'Shelter in Place', 'Shelter in Place 8 minutes - a mass shooting - a physical and emotional aftermath that leaves countless lives changed forever', 'Romance', '5c7bb97daf6bb.jpg', '2019-03-03 14:24:45'),
('9128441109874', 'Nora Roberts', 'The Collector', 'From #1 New York Times-bestselling author Nora Roberts comes a novel of a woman who needs nothing, a man who sees everything', 'Romance', '5c7bb9b0c456f.jpg', '2019-03-03 14:25:36'),
('9138432109874', 'Nora Roberts', 'Island of Glass', 'The final Guardians Trilogy novel from the #1 New York Times bestselling author of Bay of Sighs and Stars of Fortune.', 'Romance', '5c7bb7bf9be95.jpg', '2019-03-03 14:17:19'),
('9218441109874', 'William Shakespeare', 'A Midsummer Night\\\'s Dream', 'A Midsummer Night\\\'s Dream is a comedy written by William Shakespeare in 1595/96. It portrays the events surrounding the marriage of Theseus.', 'Literature', '5c7bbbed5d2b0.jpeg', '2019-03-03 14:35:09'),
('9238441109874', 'William Shakespeare', 'The The Winter\\\'s Tale', 'The Winter\\\'s Tale is a play by William Shakespeare originally published in the First Folio of 1623.', 'Literature', '5c7bbdc7c40c8.jpg', '2019-03-03 14:43:03'),
('9331441109874', 'William Shakespeare', 'Romeo and Juliet', 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding', 'Literature', '5c7bbd83aff37.jpg', '2019-03-03 14:41:55'),
('9388809701326', 'Charles Dickens', 'A Christmas Carol', 'A Christmas Carol captured the zeitgeist of the mid-Victorian revival of the Christmas holiday. Dickens had acknowledged the influence of the modern Western observance of Christmas and later inspired several aspects of Christmas, including family gatherin', 'Literature', '5c793c9df30b5.jpg', '2019-02-22 09:36:26'),
('9588809033726', 'Charles Dickens', 'Oliver Twist', 'Oliver Twist; or, the Parish Boy\'s Progress is Charles Dickens\'s second novel, and was first published as a serial 1837–39.[1] The story centres on orphan Oliver Twist, born in a workhouse and sold into apprenticeship with an undertaker. After escaping, O', 'Literature', '5c793d25ac172.jpg', '2019-02-22 09:33:57'),
('9712809033726', 'Charles Dickens', 'Little Dorrit', 'Little Dorrit is a novel by Charles Dickens, originally published in serial form between 1855 and 1857. ', 'Literature', '5c793d4bc56bb.jpg', '2019-02-22 09:33:57'),
('9713809033726', 'Charles Dickens', 'The Pickwick Papers', 'The Pickwick Papers, also known as The Posthumous Papers of the Pickwick Club, was the first novel of Charles Dickens. The novel was published by Chapman & Hall in monthly installments from March of 1836 until November 1837.', 'Literature', '5c793d7883657.jpg', '2019-02-22 09:33:57'),
('9731131109874', 'Dan Brown', 'The Da Vinci Code', 'An ingenious code hidden in the works of Leonardo da Vinci. A desperate race through the cathedrals and castles of Europe.', 'Fiction', '5c7bbfe7b3571.jpg', '2019-03-03 14:52:07'),
('9781517717704', 'Charles Dickens', 'Great Expectations', 'The novel is set in Kent and London in the early to mid-19th century[3] and contains some of Dickens\'s most memorable scenes, including the opening in a graveyard, where the young Pip is accosted by the escaped convict, Abel Magwitch.', 'Literature', '5c793d9272a71.jpg', '2019-02-22 08:58:21'),
('9783349033726', 'Charles Dickens', 'Bleak House', 'The English novel Bleak House by Charles Dickens is a satirical story about the British judiciary system. Esther Summerson is a lonely girl who was raised by her aunt and is taken in by John Jarndyce, a rich philanthropist. Parts of the story are told fro', 'Literature', '5c793db7985b7.jpg', '2019-02-22 09:33:57'),
('9783802033726', 'Charles Dickens', 'Hard Times', 'Hard Times (novel) Hard Times – For These Times (commonly known as Hard Times) is the tenth novel by Charles Dickens, first published in 1854', 'Literature', '5c793dccd9ed2.jpg', '2019-02-22 09:33:57'),
('9783809023726', 'Charles Dickens', 'Dombey and Son', 'The novel opens with the birth of a long-awaited son, Paul Junior, to Mr. Paul Dombey. Mr. Dombey is the head of the Dombey & Son shipping firm, which, in the Victorian era of overseas empire, runs a lucrative import and export business.', 'Literature', '5c793ddf1e4f6.jpg', '2019-02-22 09:33:57'),
('9783809033723', 'Charles Dickens', 'The Old Curosity Shop', 'The Old Curiosity Shop is one of two novels which Charles Dickens published along with short .... He delights in quoting and adapting literature to describe his experiences. ', 'Literature', '5c793df10be3d.jpg', '2019-02-22 09:33:57'),
('9783809033726', 'Charles Dickens', 'Nicholas Nickleby', 'Nicholas Nickleby; or, The Life and Adventures of Nicholas Nickleby is a novel by Charles Dickens. ', 'Literature', '5c793e0feb6d4.jpg', '2019-02-22 09:33:57'),
('9783809033728', 'Charles Dickens', 'Sketches by Boz', 'Sketches by Boz, Illustrative of Every-day Life and Every-day People (commonly known as Sketches by Boz) is a collection of short pieces Charles Dickens originally published in various newspapers and other periodicals between 1833 and 1836.', 'Literature', '5c793e23c4fc2.jpg', '2019-02-22 09:39:28'),
('9783809123726', 'Charles Dickens', 'The mystery of Edwin Drood', 'The Mystery of Edwin Drood is the final novel by Charles Dickens. The novel was unfinished at the time of Dickens\'s death on 9 June 1870', 'Literature', '5c793e3f776c2.jpg', '2019-02-22 09:38:56'),
('9783809433726', 'Charles Dickens', 'Our mutual friend', 'Our Mutual Friend, written in the years 1864–65, is the last novel completed by Charles Dickens and is one of his most sophisticated works', 'Literature', '5c793e530a542.jpg', '2019-02-22 09:38:56'),
('9818441109874', 'William Shakespeare', 'King Lear', 'King Lear is a tragedy written by William Shakespeare. It depicts the gradual descent into madness of the title character', 'Literature', '5c7bbc9001d59.jpg', '2019-03-03 14:37:52'),
('9831130109874', 'Dan Brown', 'The Lost Symbol', 'In this stunning follow-up to the global phenomenon The Da Vinci Code, Dan Brown demonstrates once again why he is the worldâ€™s most popular thriller writer.', 'Fiction', '5c7bc012a5699.jpg', '2019-03-03 14:52:50'),
('9831131109874', 'William Shakespeare', 'Three Tragedies', 'Three Tragedies is a collection of three short plays about some of Shakespeareâ€™s most famous minor characters.', 'Literature', '5c7bbe108d1f6.jpg', '2019-03-03 14:44:16'),
('9831431109874', 'Dan Brown', 'Angels and Demons', 'Harvard symbologist Robert Langdon works with a nuclear physicist to solve a murder and prevent a terrorist act against the Vatican', 'Fiction', '5c7bbea2f112c.jpg', '2019-03-03 14:46:42'),
('9831441109874', 'William Shakespeare', 'Hamlet', 'Prince Hamlet has been summoned home to Denmark to attend his father\'s funeral. One night, a Ghost reveals itself to Hamlet, claiming to be the ghost of Hamlet\'s father, the former king.', 'Literature', '5c7bbc1d3757a.jpg', '2019-03-03 14:35:57'),
('9832432109874', 'Nora Roberts', 'Captive Stars', 'Of the three books in The Stars of Mithra series, this is the best as the action is faster, and the characters are more interesting.', 'Romance', '5c7bb778e0930.jpg', '2019-03-03 14:16:08'),
('9832543210987', 'John Green', 'Will Grayson, Will Grayson', 'Will Grayson, Will Grayson is a novel by John Green and David Levithan, published in April 2010 by Dutton Juvenile.', 'Romance', '5c7ba9a57ab3b.jpg', '2019-03-03 13:17:09'),
('9836543210987', 'John Green', 'Paper Towns', 'Adapted from the bestselling novel by author John Green, PAPER TOWNS is a coming-of-age story centering on Quentin and his enigmatic neighbor Margo', 'Romance', '5c7ba8d7d2b18.jpg', '2019-03-03 13:13:43'),
('9838141109874', 'Nora Roberts', 'The Obsession', 'The riveting novel from the #1 New York Times bestselling author of The Liar. â€œShe stood in the deep, dark woods, breath shallow and cold prickling over her skin', 'Romance', '5c7bb9e931f60.jpg', '2019-03-03 14:26:33'),
('9838241169874', 'William Shakespeare', 'Macbeth', 'Macbeth, Thane of Glamis, receives a prophecy from a trio of witches who predict that he will become Thane of Cawdor and \"king hereafter.\"', 'Literature', '5c7bbcdb7d7a5.jpg', '2019-03-03 14:39:07'),
('9838421109874', 'Nora Roberts', 'Year One', 'A stunning new novel from the #1 New York Times bestselling author Nora Robertsâ€”Year One is an epic of hope and horror, chaos and magick', 'Romance', '5c7bba55b9a81.jpg', '2019-03-03 14:28:21'),
('9838430109874', 'Nora Roberts', 'Bay of Sighs', 'The new Guardians Trilogy novel from the #1 New York Times bestselling author of Stars of Fortune.', 'Romance', '5c7bb2396292b.jpg', '2019-03-03 13:53:45'),
('9838431109874', 'Nora Roberts', 'The Search', 'Talented search and rescue dog trainer Fiona Bristow escaped the clutches of a serial killer several years before, but not before he murdered her fiance', 'Romance', '5c7bba0b1c0a8.jpg', '2019-03-03 14:27:07'),
('9838432109874', 'Nora Roberts', 'Angels Fall', 'Based on Nora Roberts\' best-selling novel. Reece Gilmore finds herself settling down in a Picturesque Wyoming town, hoping to escape the demons that plague her.', 'Romance', '5c7bb18aa3f53.jpg', '2019-03-03 13:50:50'),
('9838440109874', 'William Shakespeare', 'Measure for Measure', 'Measure for Measure is a play by William Shakespeare that was first performed in 1604.', 'Literature', '5c7bbd0fe71a1.jpg', '2019-03-03 14:39:59'),
('9838441109874', 'Nora Roberts', 'Sanctuary', 'Following the success of Montana Sky, Roberts bases another story on the three siblings in that novel', 'Romance', '5c7bb8a1709d0.jpg', '2019-03-03 14:21:05'),
('9838442109874', 'Nora Roberts', 'Northern Lights', 'Let #1 New York Times bestselling author Nora Roberts fly you into Lunacy, Alaska, and into a colorful, compelling novel about two lonely souls', 'Romance', '5c7bb868be1c2.jpg', '2019-03-03 14:20:08'),
('9838449109874', 'William Shakespeare', 'Julius Caesar', 'Gaius Julius Caesar was born into a patrician family, the gens Julia, which claimed descent from Iulus, son of the legendary Trojan prince Aeneas', 'Literature', '5c7bbc6017c7c.jpg', '2019-03-03 14:37:04'),
('9838543210987', 'John Green', 'The Fault in our Stars', 'The Fault in our Stars is a book for everyone, be it people in their old age, or teens studying in school, this book is an ideal feel good.', 'Romance', '5c7ba9431c551.jpg', '2019-03-03 13:15:31'),
('9838931109874', 'William Shakespeare', 'Othello', 'Othello (The Tragedy of Othello, the Moor of Venice) is a tragedy by William Shakespeare, believed to have been written in 1603.', 'Literature', '5c7bbd3bec565.jpg', '2019-03-03 14:40:43'),
('9871131109874', 'Dan Brown', 'Origin', 'First published in 2017, Origin by Dan Brown is a thrilling mystery novel and the 5th installment in the bestselling Robert Langdon series.', 'Fiction', '5c7bbf8da3a88.jpg', '2019-03-03 14:50:37'),
('9876543210987', 'John Green', 'Looking for Alaska', 'Looking for Alaska is John Green\'s first novel, published in March 2005 by Dutton Juvenile', 'Romance', '5c7ba772d8a69.jpg', '2019-03-03 13:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(6) NOT NULL,
  `booksID` varchar(13) NOT NULL,
  `sellerID` int(6) DEFAULT NULL,
  `price` float NOT NULL,
  `onSale` bit(1) NOT NULL DEFAULT b'1',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `booksID`, `sellerID`, `price`, `onSale`, `createdAt`) VALUES
(1, '9876543210987', 34, 7.9, b'1', '2019-03-03 13:07:47'),
(2, '9836543210987', 34, 3.6, b'1', '2019-03-03 13:13:43'),
(3, '9838543210987', 34, 7.99, b'1', '2019-03-03 13:15:31'),
(4, '9832543210987', 34, 8.99, b'1', '2019-03-03 13:17:09'),
(9, '9838432109874', 34, 10.99, b'1', '2019-03-03 13:50:50'),
(10, '9838430109874', 34, 10.99, b'1', '2019-03-03 13:53:45'),
(11, '9832432109874', 34, 10.99, b'1', '2019-03-03 14:16:09'),
(12, '9138432109874', 34, 10.99, b'1', '2019-03-03 14:17:19'),
(13, '9838442109874', 34, 10.99, b'1', '2019-03-03 14:20:08'),
(14, '9838441109874', 34, 10.99, b'1', '2019-03-03 14:21:05'),
(15, '9038441109874', 34, 10.99, b'1', '2019-03-03 14:21:50'),
(16, '9038441119874', 34, 10.99, b'1', '2019-03-03 14:24:45'),
(17, '9128441109874', 34, 10.99, b'1', '2019-03-03 14:25:36'),
(18, '9838141109874', 34, 10.99, b'1', '2019-03-03 14:26:33'),
(19, '9838431109874', 34, 10.99, b'1', '2019-03-03 14:27:07'),
(20, '9838421109874', 34, 10.99, b'1', '2019-03-03 14:28:21'),
(21, '9218441109874', 34, 9.99, b'1', '2019-03-03 14:35:09'),
(22, '9831441109874', 34, 9.99, b'1', '2019-03-03 14:35:57'),
(23, '9838449109874', 34, 9.99, b'1', '2019-03-03 14:37:04'),
(24, '9818441109874', 34, 10.99, b'1', '2019-03-03 14:37:52'),
(25, '9838241169874', 34, 11.99, b'1', '2019-03-03 14:39:07'),
(26, '9838440109874', 34, 11.99, b'1', '2019-03-03 14:40:00'),
(27, '9838931109874', 34, 11.99, b'1', '2019-03-03 14:40:44'),
(28, '9331441109874', 34, 5.99, b'1', '2019-03-03 14:41:55'),
(29, '9238441109874', 34, 2.99, b'1', '2019-03-03 14:43:03'),
(30, '9831131109874', 34, 3.11, b'1', '2019-03-03 14:44:16'),
(31, '9831431109874', 34, 2.26, b'1', '2019-03-03 14:46:43'),
(32, '8831131109874', 34, 3.28, b'1', '2019-03-03 14:47:58'),
(33, '2131131109874', 34, 3.39, b'1', '2019-03-03 14:49:06'),
(34, '9871131109874', 34, 3.28, b'1', '2019-03-03 14:50:37'),
(35, '9731131109874', 34, 3.62, b'1', '2019-03-03 14:52:07'),
(36, '9831130109874', 34, 3.73, b'1', '2019-03-03 14:52:50'),
(37, '9876543210987', 34, 3, b'1', '2019-03-03 22:26:25'),
(38, '9781517717704', 51, 10.99, b'0', '2019-03-05 22:29:31'),
(39, '9781517717704', 51, 12.99, b'0', '2019-03-05 22:54:28'),
(40, '9781517717704', 51, 15, b'0', '2019-03-05 22:59:57'),
(41, '9781517717704', 51, 17, b'1', '2019-03-05 23:00:17'),
(42, '9783349033726', 51, 14, b'1', '2019-03-05 23:00:56'),
(43, '9783349033726', 34, 12, b'1', '2019-03-05 23:01:57'),
(45, '9783809023726', 34, 15.99, b'1', '2019-03-06 08:49:39'),
(46, '9783809033726', 34, 17.99, b'0', '2019-03-06 08:50:39'),
(47, '9783809033726', 34, 13.99, b'1', '2019-03-06 08:50:57'),
(48, '9388809701326', 58, 5.99, b'1', '2019-03-06 12:50:53'),
(49, '9588809033726', 58, 9.99, b'1', '2019-03-06 12:51:09'),
(50, '9712809033726', 58, 5.99, b'1', '2019-03-06 12:51:23'),
(51, '9713809033726', 58, 4.99, b'0', '2019-03-06 12:51:36'),
(52, '9783809123726', 58, 4.99, b'1', '2019-03-06 12:51:47'),
(53, '9713809033726', 58, 4.99, b'0', '2019-03-06 12:51:54'),
(54, '9783802033726', 58, 5.99, b'0', '2019-03-06 12:52:01'),
(55, '9783802033726', 58, 4.99, b'1', '2019-03-06 12:52:11'),
(56, '9783809033728', 58, 6.99, b'1', '2019-03-06 12:52:29'),
(57, '9783809433726', 58, 4.99, b'1', '2019-03-06 12:52:42'),
(58, '9038441109874', 58, 5.99, b'1', '2019-03-06 12:52:58'),
(59, '9138432109874', 58, 8.99, b'0', '2019-03-06 12:53:06'),
(60, '9128441109874', 58, 9.99, b'1', '2019-03-06 12:53:13'),
(61, '9138432109874', 58, 4.99, b'1', '2019-03-06 12:53:19'),
(62, '9838141109874', 58, 6.99, b'1', '2019-03-06 12:53:25'),
(63, '9838421109874', 58, 7.5, b'1', '2019-03-06 12:53:30'),
(64, '9838430109874', 58, 4.9, b'1', '2019-03-06 12:53:37'),
(65, '9838442109874', 58, 4.99, b'1', '2019-03-06 12:53:46'),
(66, '9832432109874', 58, 3.99, b'1', '2019-03-06 12:53:51'),
(67, '9838431109874', 58, 4.99, b'1', '2019-03-06 12:53:59'),
(68, '9838441109874', 58, 9.99, b'1', '2019-03-06 12:54:11'),
(69, '2131131109874', 58, 4.99, b'1', '2019-03-06 12:55:27'),
(70, '8831131109874', 58, 6.99, b'1', '2019-03-06 12:55:34'),
(71, '9731131109874', 58, 7.99, b'0', '2019-03-06 12:55:41'),
(72, '9731131109874', 58, 4.99, b'1', '2019-03-06 12:55:50'),
(73, '9831130109874', 58, 9.99, b'1', '2019-03-06 12:55:56'),
(74, '9831431109874', 58, 4.99, b'1', '2019-03-06 12:56:03'),
(75, '9871131109874', 58, 5.99, b'1', '2019-03-06 12:56:08'),
(76, '9218441109874', 58, 5.99, b'1', '2019-03-06 12:56:30'),
(77, '9238441109874', 58, 4.99, b'1', '2019-03-06 12:56:37'),
(78, '9331441109874', 58, 5.99, b'1', '2019-03-06 12:56:46'),
(79, '9838440109874', 58, 9.99, b'1', '2019-03-06 12:56:52'),
(80, '9838449109874', 58, 4.99, b'1', '2019-03-06 12:57:03'),
(81, '9838931109874', 58, 4.99, b'1', '2019-03-06 12:57:12'),
(82, '9832543210987', 58, 6.99, b'1', '2019-03-06 12:58:01'),
(83, '9836543210987', 58, 4.99, b'1', '2019-03-06 12:58:07'),
(84, '9838543210987', 58, 9.99, b'1', '2019-03-06 12:58:13'),
(85, '9876543210987', 58, 8.99, b'1', '2019-03-06 12:58:20'),
(86, '2131131109874', 60, 6.99, b'1', '2019-03-06 13:00:16'),
(87, '8831131109874', 60, 6.99, b'1', '2019-03-06 13:00:30'),
(88, '9731131109874', 60, 7.99, b'0', '2019-03-06 13:00:44'),
(89, '9731131109874', 60, 6.99, b'1', '2019-03-06 13:00:51'),
(90, '9831130109874', 60, 7.99, b'1', '2019-03-06 13:00:59'),
(91, '9831431109874', 60, 8.99, b'0', '2019-03-06 13:01:08'),
(92, '9871131109874', 60, 9.99, b'1', '2019-03-06 13:01:20'),
(93, '9831431109874', 60, 9.99, b'1', '2019-03-06 13:01:27'),
(94, '9218441109874', 60, 4.99, b'1', '2019-03-06 13:01:56'),
(95, '9238441109874', 60, 7.99, b'1', '2019-03-06 13:02:06'),
(96, '9331441109874', 60, 8.99, b'0', '2019-03-06 13:02:13'),
(97, '9331441109874', 60, 9.99, b'1', '2019-03-06 13:02:22'),
(98, '9818441109874', 60, 8.99, b'1', '2019-03-06 13:02:38'),
(99, '9831441109874', 60, 9.99, b'0', '2019-03-06 13:02:45'),
(100, '9838241169874', 60, 7.99, b'1', '2019-03-06 13:02:51'),
(101, '9838449109874', 60, 7.99, b'1', '2019-03-06 13:02:59'),
(102, '9838931109874', 60, 8.99, b'1', '2019-03-06 13:03:05'),
(103, '9831441109874', 60, 4.99, b'1', '2019-03-06 13:03:14'),
(104, '9831131109874', 60, 4.99, b'1', '2019-03-06 13:03:23'),
(105, '9838440109874', 60, 5.99, b'1', '2019-03-06 13:03:32'),
(106, '9838441109874', 60, 4.99, b'1', '2019-03-06 13:03:58'),
(107, '9832432109874', 60, 9.99, b'1', '2019-03-06 13:04:05'),
(108, '9838431109874', 60, 4.99, b'0', '2019-03-06 13:04:14'),
(109, '9838432109874', 60, 5.99, b'1', '2019-03-06 13:04:20'),
(110, '9838430109874', 60, 6.99, b'1', '2019-03-06 13:04:28'),
(111, '9038441119874', 60, 3.99, b'1', '2019-03-06 13:04:34'),
(112, '9138432109874', 60, 4.99, b'1', '2019-03-06 13:04:42'),
(113, '9838431109874', 60, 7.99, b'1', '2019-03-06 13:04:49'),
(114, '9832543210987', 60, 4.99, b'1', '2019-03-06 13:05:16'),
(115, '9836543210987', 60, 5.99, b'1', '2019-03-06 13:05:25'),
(116, '9838543210987', 60, 9.99, b'1', '2019-03-06 13:05:30'),
(117, '9876543210987', 60, 8.99, b'1', '2019-03-06 13:05:35'),
(118, '9388809701326', 60, 5.99, b'1', '2019-03-06 13:05:50'),
(119, '9588809033726', 60, 4.99, b'1', '2019-03-06 13:05:57'),
(120, '9712809033726', 60, 4.99, b'1', '2019-03-06 13:06:05'),
(121, '9783802033726', 60, 9.99, b'1', '2019-03-06 13:06:10'),
(122, '9783809123726', 60, 8.99, b'1', '2019-03-06 13:06:20'),
(123, '9783809433726', 60, 8.99, b'1', '2019-03-06 13:06:29'),
(124, '9832543210987', 59, 5.99, b'1', '2019-03-06 13:07:58'),
(125, '9836543210987', 59, 6.99, b'0', '2019-03-06 13:08:14'),
(126, '9836543210987', 59, 5.99, b'1', '2019-03-06 13:08:19'),
(127, '9838543210987', 59, 4.99, b'1', '2019-03-06 13:08:31'),
(128, '9783809033726', 59, 4.99, b'1', '2019-03-06 13:08:43'),
(129, '9783809123726', 59, 5.99, b'1', '2019-03-06 13:08:49'),
(130, '9783809023726', 59, 4.99, b'0', '2019-03-06 13:08:56'),
(131, '9783809023726', 59, 6.99, b'1', '2019-03-06 13:09:03'),
(132, '9713809033726', 59, 4.99, b'1', '2019-03-06 13:09:09'),
(133, '9388809701326', 59, 4.99, b'1', '2019-03-06 13:09:14'),
(134, '2131131109874', 59, 4.99, b'1', '2019-03-06 13:09:27'),
(135, '8831131109874', 59, 4.99, b'1', '2019-03-06 13:09:35'),
(136, '9731131109874', 59, 5.99, b'1', '2019-03-06 13:09:40'),
(137, '9831130109874', 59, 4.99, b'0', '2019-03-06 13:09:48'),
(138, '9831130109874', 59, 5.99, b'1', '2019-03-06 13:09:54'),
(139, '9831431109874', 59, 5.99, b'1', '2019-03-06 13:10:00'),
(140, '9871131109874', 59, 7.99, b'1', '2019-03-06 13:10:07'),
(141, '9038441109874', 59, 8.99, b'1', '2019-03-06 13:10:20'),
(142, '9038441119874', 59, 5.99, b'1', '2019-03-06 13:10:27'),
(143, '9128441109874', 59, 5.99, b'1', '2019-03-06 13:10:34'),
(144, '9138432109874', 59, 4.09, b'1', '2019-03-06 13:10:45'),
(145, '9832432109874', 59, 4.99, b'1', '2019-03-06 13:11:06'),
(146, '9838141109874', 59, 8.99, b'0', '2019-03-06 13:11:26'),
(147, '9838141109874', 59, 5.99, b'1', '2019-03-06 13:11:34'),
(148, '9838421109874', 59, 9.99, b'1', '2019-03-06 13:11:41'),
(149, '9838430109874', 59, 5.99, b'0', '2019-03-06 13:11:48'),
(150, '9838430109874', 59, 4.99, b'1', '2019-03-06 13:11:58'),
(151, '9838441109874', 59, 5.99, b'1', '2019-03-06 13:12:14'),
(152, '9838442109874', 59, 4.99, b'1', '2019-03-06 13:12:23'),
(153, '9713809033726', 58, 5.99, b'1', '2019-03-06 13:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(6) NOT NULL,
  `ordersID` int(6) NOT NULL,
  `listingsID` int(6) DEFAULT NULL,
  `quantity` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `ordersID`, `listingsID`, `quantity`) VALUES
(9, 1, 48, 1),
(10, 1, 36, 1),
(11, 1, 17, 1),
(12, 1, 32, 11),
(13, 2, 48, 12),
(14, 3, 48, 1),
(15, 3, 49, 1),
(16, 3, 50, 1),
(17, 3, 132, 1),
(18, 3, 41, 1),
(19, 3, 42, 1),
(20, 3, 55, 1),
(21, 4, 33, 1),
(22, 4, 32, 1),
(23, 4, 35, 1),
(24, 4, 36, 1),
(25, 4, 31, 1),
(26, 4, 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(6) NOT NULL,
  `userID` int(6) NOT NULL,
  `addressID` int(6) NOT NULL,
  `orderTotal` float NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userID`, `addressID`, `orderTotal`, `createdAt`) VALUES
(1, 53, 9, 26.25, '2019-03-08 15:06:15'),
(2, 53, 12, 5.99, '2019-03-08 15:19:06'),
(3, 53, 12, 62.95, '2019-03-08 17:46:23'),
(4, 53, 12, 41.23, '2019-03-08 17:48:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_ibfk_1` (`accountsID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booksID` (`booksID`),
  ADD KEY `listings_ibfk_2` (`sellerID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderitems_ibfk_3` (`ordersID`),
  ADD KEY `orderitems_ibfk_4` (`listingsID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `addressID` (`addressID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`accountsID`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_2` FOREIGN KEY (`sellerID`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `listings_ibfk_3` FOREIGN KEY (`booksID`) REFERENCES `books` (`isbn`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_3` FOREIGN KEY (`ordersID`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderitems_ibfk_4` FOREIGN KEY (`listingsID`) REFERENCES `listings` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`addressID`) REFERENCES `address` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
