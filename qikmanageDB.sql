-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 04:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qikmanage`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `pCase` (`str` TEXT) RETURNS TEXT CHARSET latin1 BEGIN
  DECLARE result TEXT DEFAULT '';
  DECLARE word TEXT DEFAULT '';
  DECLARE working_char TEXT DEFAULT '';
  DECLARE last_space INT DEFAULT 0;
  DECLARE word_boundry TEXT DEFAULT ' (){}[]-/'; #Used to decide when a new word begins.  Add you boundries here!!
  DECLARE ucase_words TEXT DEFAULT 'UK,USA,DVD,DVDs,GB'; #To make some words uppercase use ucase_words below.  The text entered here is used so dvds becomes DVDs.
  DECLARE i INT DEFAULT 1;  #Loop counter
  DECLARE found_boundry INT DEFAULT 1; #When we find a boundry set to 1 (True) else 0 (False)
 
  # handle NULL
  IF (str IS NULL) THEN
    RETURN NULL;
  END IF;
 
  # if 0 length string given
  IF (CHAR_LENGTH(str) = 0) THEN
    RETURN '';
  END IF;
 
  SET str = LOWER(str);
 
  # loop through each letter looking for a word boundry
  WHILE(i <= (LENGTH(str)+1)) DO
 
    #Set our working charater
    SET working_char=SUBSTRING(str, i-1, 1);
 
    #Find a word boundry
    IF(LOCATE(working_char, word_boundry)>0) THEN
      #Check if last word was in our uppercase list, using the example in the list to allow dvds to become DVDs
      IF(LOCATE(word, ucase_words)>0) THEN
        SET result=CONCAT(LEFT(result,(LENGTH(result)-LENGTH(word))),MID(ucase_words,LOCATE(word, ucase_words),LENGTH(word)));
      END IF;
 
      SET found_boundry=1;  #Set the boundry flag, then ignore
      SET result=CONCAT(result, working_char);
      SET word=''; #Reset word
    ELSE
      SET word=CONCAT(word, working_char);
      IF(found_boundry=1) THEN
        SET result = CONCAT(result, UPPER(working_char));  #After a boundry so upper case
        SET found_boundry=0;
      ELSE
        SET result = CONCAT(result, working_char);
      END IF;
 
    END IF;
 
    SET i=i+1;
 
  END WHILE;
 
  #Check if last word was in our uppercase list
  IF(LOCATE(word, ucase_words)>0) THEN
    SET result=CONCAT(LEFT(result,(LENGTH(result)-LENGTH(word))),MID(ucase_words,LOCATE(word, ucase_words),LENGTH(word)));
  END IF;
 
        RETURN result;
 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sid` varchar(100) NOT NULL,
  `htno` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `classID` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `taken` varchar(100) NOT NULL,
  `hour` int(100) NOT NULL,
  `count` int(50) NOT NULL,
  `year` int(30) NOT NULL,
  `thisyear` varchar(20) NOT NULL,
  `thismonth` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `htno`, `date`, `classID`, `status`, `branch`, `modified`, `taken`, `hour`, `count`, `year`, `thisyear`, `thismonth`) VALUES
('1', '159H1A0409', '29/01/21', '14', 1, '2', '2021-01-29 12:30:19', '1234', 1, 1, 1, '2021', 0),
('3', '159H1A0413', '29/01/21', '14', 1, '2', '2021-01-29 12:30:19', '1234', 1, 1, 1, '2021', 0),
('4', '159H1A0434', '29/01/21', '14', 1, '2', '2021-01-29 12:30:19', '1234', 1, 1, 1, '2021', 0),
('5', '159H1A0401', '29/01/21', '14', 1, '2', '2021-01-29 12:30:20', '1234', 1, 1, 1, '2021', 0),
('7', '159H1A0438', '29/01/21', '14', 1, '2', '2021-01-29 12:30:20', '1234', 1, 1, 1, '2021', 0),
('8', '159H1A0402', '29/01/21', '14', 1, '2', '2021-01-29 12:30:20', '1234', 1, 1, 1, '2021', 0),
('1', '159H1A0409', '29/01/21', '14', 1, '2', '2021-01-29 12:34:33', '1234', 2, 2, 1, '2021', 0),
('3', '159H1A0413', '29/01/21', '14', 1, '2', '2021-01-29 12:34:33', '1234', 2, 2, 1, '2021', 0),
('4', '159H1A0434', '29/01/21', '14', 1, '2', '2021-01-29 12:34:33', '1234', 2, 2, 1, '2021', 0),
('5', '159H1A0401', '29/01/21', '14', 1, '2', '2021-01-29 12:34:33', '1234', 2, 2, 1, '2021', 0),
('7', '159H1A0438', '29/01/21', '14', 1, '2', '2021-01-29 12:34:33', '1234', 2, 2, 1, '2021', 0),
('8', '159H1A0402', '29/01/21', '14', 1, '2', '2021-01-29 12:34:33', '1234', 2, 2, 1, '2021', 0),
('1', '159H1A0409', '29/01/21', '14', 1, '2', '2021-01-29 12:34:49', '1234', 3, 3, 1, '2021', 0),
('3', '159H1A0413', '29/01/21', '14', 1, '2', '2021-01-29 12:34:49', '1234', 3, 3, 1, '2021', 0),
('4', '159H1A0434', '29/01/21', '14', 1, '2', '2021-01-29 12:34:49', '1234', 3, 3, 1, '2021', 0),
('5', '159H1A0401', '29/01/21', '14', 1, '2', '2021-01-29 12:34:49', '1234', 3, 3, 1, '2021', 0),
('7', '159H1A0438', '29/01/21', '14', 1, '2', '2021-01-29 12:34:49', '1234', 3, 3, 1, '2021', 0),
('8', '159H1A0402', '29/01/21', '14', 1, '2', '2021-01-29 12:34:49', '1234', 3, 3, 1, '2021', 0),
('1', '159H1A0409', '29/01/21', '14', 1, '2', '2021-01-29 12:35:18', '1234', 4, 4, 1, '2021', 0),
('3', '159H1A0413', '29/01/21', '14', 1, '2', '2021-01-29 12:35:18', '1234', 4, 4, 1, '2021', 0),
('4', '159H1A0434', '29/01/21', '14', 1, '2', '2021-01-29 12:35:18', '1234', 4, 4, 1, '2021', 0),
('5', '159H1A0401', '29/01/21', '14', 1, '2', '2021-01-29 12:35:18', '1234', 4, 4, 1, '2021', 0),
('7', '159H1A0438', '29/01/21', '14', 1, '2', '2021-01-29 12:35:18', '1234', 4, 4, 1, '2021', 0),
('8', '159H1A0402', '29/01/21', '14', 1, '2', '2021-01-29 12:35:18', '1234', 4, 4, 1, '2021', 0),
('1', '159H1A0409', '29/01/21', '14', 1, '2', '2021-01-29 12:35:40', '1234', 5, 5, 1, '2021', 0),
('3', '159H1A0413', '29/01/21', '14', 1, '2', '2021-01-29 12:35:40', '1234', 5, 5, 1, '2021', 0),
('4', '159H1A0434', '29/01/21', '14', 1, '2', '2021-01-29 12:35:40', '1234', 5, 5, 1, '2021', 0),
('5', '159H1A0401', '29/01/21', '14', 1, '2', '2021-01-29 12:35:41', '1234', 5, 5, 1, '2021', 0),
('7', '159H1A0438', '29/01/21', '14', 1, '2', '2021-01-29 12:35:41', '1234', 5, 5, 1, '2021', 0),
('8', '159H1A0402', '29/01/21', '14', 1, '2', '2021-01-29 12:35:41', '1234', 5, 5, 1, '2021', 0),
('1', '159H1A0409', '29/01/21', '15', 1, '3', '2021-01-29 12:36:01', '1234', 6, 1, 1, '2021', 0),
('3', '159H1A0413', '29/01/21', '15', 1, '3', '2021-01-29 12:36:01', '1234', 6, 1, 1, '2021', 0),
('4', '159H1A0434', '29/01/21', '15', 1, '3', '2021-01-29 12:36:01', '1234', 6, 1, 1, '2021', 0),
('5', '159H1A0401', '29/01/21', '15', 1, '3', '2021-01-29 12:36:01', '1234', 6, 1, 1, '2021', 0),
('7', '159H1A0438', '29/01/21', '15', 1, '3', '2021-01-29 12:36:01', '1234', 6, 1, 1, '2021', 0),
('8', '159H1A0402', '29/01/21', '15', 1, '3', '2021-01-29 12:36:01', '1234', 6, 1, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 0, '11', '2021-02-01 09:35:33', '13', 1, 1, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 0, '11', '2021-02-01 09:35:33', '13', 1, 1, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 0, '11', '2021-02-01 09:35:33', '13', 1, 1, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 09:35:33', '13', 1, 1, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 09:35:34', '13', 1, 1, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 0, '11', '2021-02-01 09:35:34', '13', 1, 1, 1, '2021', 0),
('2', '159H1A0439', '01/02/21', '20', 1, '11', '2021-02-01 09:40:22', '13', 1, 2, 2, '2021', 0),
('9', '159H1A0431', '01/02/21', '2', 1, '11', '2021-02-01 09:47:21', '13', 1, 1, 3, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 0, '11', '2021-02-01 15:18:55', '13', 2, 3, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 0, '11', '2021-02-01 15:18:55', '13', 2, 3, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:18:55', '13', 2, 3, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:18:56', '13', 2, 3, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:18:56', '13', 2, 3, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:18:56', '13', 2, 3, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:19:00', '13', 3, 4, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:19:00', '13', 3, 4, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:19:00', '13', 3, 4, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:19:00', '13', 3, 4, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:19:00', '13', 3, 4, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:19:00', '13', 3, 4, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:19:05', '13', 4, 5, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:19:05', '13', 4, 5, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:19:05', '13', 4, 5, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:19:05', '13', 4, 5, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:19:05', '13', 4, 5, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:19:05', '13', 4, 5, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:19:09', '13', 5, 6, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:19:09', '13', 5, 6, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:19:09', '13', 5, 6, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:19:09', '13', 5, 6, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:19:09', '13', 5, 6, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:19:09', '13', 5, 6, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:19:13', '13', 6, 7, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:19:13', '13', 6, 7, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:19:13', '13', 6, 7, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:19:13', '13', 6, 7, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:19:13', '13', 6, 7, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:19:13', '13', 6, 7, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:19:17', '13', 7, 8, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:19:17', '13', 7, 8, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:19:17', '13', 7, 8, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:19:17', '13', 7, 8, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:19:17', '13', 7, 8, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:19:17', '13', 7, 8, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 0, '11', '2021-02-01 15:20:00', '13', 8, 9, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 0, '11', '2021-02-01 15:20:00', '13', 8, 9, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 0, '11', '2021-02-01 15:20:00', '13', 8, 9, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 0, '11', '2021-02-01 15:20:00', '13', 8, 9, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 0, '11', '2021-02-01 15:20:00', '13', 8, 9, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 0, '11', '2021-02-01 15:20:00', '13', 8, 9, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:20:52', '13', 9, 10, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:20:52', '13', 9, 10, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:20:52', '13', 9, 10, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:20:52', '13', 9, 10, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:20:52', '13', 9, 10, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:20:52', '13', 9, 10, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 15:21:05', '13', 10, 11, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 15:21:05', '13', 10, 11, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 15:21:05', '13', 10, 11, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 15:21:05', '13', 10, 11, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 15:21:05', '13', 10, 11, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 15:21:05', '13', 10, 11, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 18:37:22', '13', 11, 12, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 1, '11', '2021-02-01 18:37:22', '13', 11, 12, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 1, '11', '2021-02-01 18:37:22', '13', 11, 12, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 1, '11', '2021-02-01 18:37:22', '13', 11, 12, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 1, '11', '2021-02-01 18:37:22', '13', 11, 12, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 18:37:22', '13', 11, 12, 1, '2021', 0),
('1', '159H1A0409', '01/02/21', '20', 1, '11', '2021-02-01 19:29:29', '13', 12, 13, 1, '2021', 0),
('3', '159H1A0413', '01/02/21', '20', 0, '11', '2021-02-01 19:29:30', '13', 12, 13, 1, '2021', 0),
('4', '159H1A0434', '01/02/21', '20', 0, '11', '2021-02-01 19:29:30', '13', 12, 13, 1, '2021', 0),
('5', '159H1A0401', '01/02/21', '20', 0, '11', '2021-02-01 19:29:30', '13', 12, 13, 1, '2021', 0),
('7', '159H1A0438', '01/02/21', '20', 0, '11', '2021-02-01 19:29:30', '13', 12, 13, 1, '2021', 0),
('8', '159H1A0402', '01/02/21', '20', 1, '11', '2021-02-01 19:29:30', '13', 12, 13, 1, '2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `bname` varchar(500) NOT NULL,
  `bhod` varchar(100) NOT NULL DEFAULT 'Not Added',
  `bid` bigint(20) UNSIGNED NOT NULL,
  `badded` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `duration` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `hodsince` varchar(30) NOT NULL,
  `seats` int(20) NOT NULL,
  `isactive` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`bname`, `bhod`, `bid`, `badded`, `duration`, `sem`, `hodsince`, `seats`, `isactive`) VALUES
('Artificial Intelligence', 'LIKI18', 11, '30/01/21', '4', '', '31/01/21', 120, 1),
('Electronics and communication engineering', '33', 12, '30/01/21', '4', '', '30/01/21', 60, 1),
('Data Science', '13', 13, '31/01/21', '5', '', '31/01/21', 60, 1),
('computer science engineering', 'AFRI19', 14, '31/01/21', '4', '', '31/01/21', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `clsname` varchar(500) NOT NULL,
  `clsid` bigint(20) UNSIGNED NOT NULL,
  `empid` varchar(100) NOT NULL,
  `branchid` varchar(100) NOT NULL,
  `dateadded` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `regulation` varchar(100) NOT NULL,
  `year` varchar(25) NOT NULL,
  `sem` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`clsname`, `clsid`, `empid`, `branchid`, `dateadded`, `regulation`, `year`, `sem`) VALUES
('Electronic devices and circuits', 1, '8', '1', '', 'R15', '2', '1'),
('Java', 2, '1234', '2', '', 'R15', '3', '2'),
('Electromagnetic theory and transmission lines', 3, '1234', '1', '20/01/21', 'R15', '2', '2'),
('switching theory and logic design', 4, '1234', '1', '20/01/21', 'R15', '3', '1'),
('Python', 5, '9', '2', '21/01/21', 'R15', '3', '2'),
('Python', 6, '18', '3', '21/01/21', 'R15', '1', '1'),
('Python', 7, '1234', 'Array', '21/01/21', 'R15', '1', '1'),
('Electromagnetic theory and transmission lines', 8, '9', 'Array', '21/01/21', 'R15', '1', '2'),
('Electromagnetic theory and transmission lines', 9, '9', 'Array', '21/01/21', 'R15', '1', '2'),
('Electromagnetic theory and transmission lines', 10, '13', '1', '21/01/21', 'R15', '1', '1'),
('Electromagnetic theory and transmission lines', 11, '13', '2', '21/01/21', 'R15', '1', '1'),
('Electromagnetic theory and transmission lines', 12, '8', '2', '22/01/21', 'R15', '1', '1'),
('Python', 13, '1234', '1', '22/01/21', 'R15', '1', '2'),
('Python', 14, '1234', '2', '22/01/21', 'R15', '1', '2'),
('Python', 15, '1234', '3', '22/01/21', 'R15', '1', '2'),
('Mathematics-II', 16, '10', '1', '22/01/21', 'R15', '2', '2'),
('Mathematics-II', 17, '10', '2', '22/01/21', 'R15', '2', '2'),
('Electromagnetic theory and transmission lines', 18, '13', '3', '25/01/21', 'R15', '4', '1'),
('Electromagnetic theory and transmission lines', 19, '8', '9', '30/01/21', 'R15', '1', '1'),
('Electromagnetic theory and transmission lines', 20, '13', '11', '01/02/21', 'R15', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `clgname` varchar(500) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `Regkey` varchar(1000) NOT NULL DEFAULT '0',
  `clgid` bigint(20) UNSIGNED NOT NULL,
  `dateadded` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clgname`, `address`, `pincode`, `Regkey`, `clgid`, `dateadded`) VALUES
('srts', 'devuni kadapa', '516002', 'not registered', 1, '2021-01-11 16:29:14'),
('korm', 'tirupati', '516006', 'aguahgfhgafyuakufafuafakufg', 2, '2021-01-11 16:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cname` varchar(500) NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `branches` tinyint(4) NOT NULL DEFAULT 0,
  `modified` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `cfee` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `emp_id` varchar(20) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `joindate` varchar(20) DEFAULT NULL,
  `Qualification` varchar(30) DEFAULT NULL,
  `stream` varchar(100) DEFAULT NULL,
  `salary` varchar(15) DEFAULT NULL,
  `employmenttype` varchar(20) DEFAULT NULL,
  `HOD_id` varchar(10) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `datemodified` varchar(30) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `experiance` varchar(15) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phno` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `branchid` varchar(30) NOT NULL,
  `empid` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `modified_date` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `hour` varchar(100) NOT NULL,
  `clsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`hour`, `clsid`) VALUES
('1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `First_Name` varchar(110) NOT NULL,
  `Last_Name` varchar(110) NOT NULL,
  `User_Name1` varchar(110) NOT NULL,
  `EmpId_Number` varchar(19) NOT NULL,
  `Branch_Teaching` varchar(110) NOT NULL,
  `Qualification` varchar(110) NOT NULL,
  `Staff_Role` varchar(110) NOT NULL,
  `Employment_Type` varchar(110) NOT NULL,
  `Experience` varchar(110) NOT NULL,
  `user_email` varchar(110) NOT NULL,
  `Dateof_Birth` varchar(110) NOT NULL,
  `DateOf_Joining` varchar(110) NOT NULL,
  `Faculty_PhNo` varchar(110) NOT NULL,
  `addlPhNo` varchar(100) NOT NULL,
  `Gender` varchar(110) NOT NULL,
  `Blood_Group` varchar(110) NOT NULL,
  `Permanent_Address` varchar(110) NOT NULL,
  `State1` varchar(110) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Pin_code` varchar(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-active and 2-inactive and 3-deleted',
  `sal` varchar(50) NOT NULL DEFAULT 'not mentioned',
  `BAN` varchar(50) NOT NULL DEFAULT 'not added',
  `ifsc` varchar(100) NOT NULL DEFAULT 'not added'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `First_Name`, `Last_Name`, `User_Name1`, `EmpId_Number`, `Branch_Teaching`, `Qualification`, `Staff_Role`, `Employment_Type`, `Experience`, `user_email`, `Dateof_Birth`, `DateOf_Joining`, `Faculty_PhNo`, `addlPhNo`, `Gender`, `Blood_Group`, `Permanent_Address`, `State1`, `District`, `Pin_code`, `status`, `sal`, `BAN`, `ifsc`) VALUES
(1, 'sreedhar', 'bondhalakunta', 'sreedhar@srts.com', '1234', '2', 'B.TECH', 'ADMIN', 'PERMANENT', '1', 'sreedhar@gmail.com', '2021-01-06', '2021-01-13', '8142810504', '', 'MALE', 'O+ve', '32/80-1a, devuni kadapa', 'andhra pradesh', 'kadapa', '516002', 0, '', '', 'not added'),
(2, 'naveen', 'narayana', '', '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(3, 'naveen', 'shetty', '', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(5, 'Ramana', 'Reddy', '', '10', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(6, 'Ramana', 'Reddy', '', '11', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(7, 'sunil', 'Kumar', 'sunilkumar@qik.com', '12', '2', 'B.TECH', 'Management', 'Temporary', '0', 'sreedhar1@gmail.com', '2021-01-20', '2021-01-19', '8142810504', '', 'MALE', 'O+ve', 'jsvfjvdfjsf', 'hsvfjdvfjsvjv', 'hfjdsffv', '516002', 0, '', '', 'not added'),
(8, 'sreedhar', 'bondalakunta', '', '13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(9, 'sreedhar', 'b', '', '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(10, 'sreedhar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'not mentioned', 'not added', 'not added'),
(11, 'erg', 'reg', 'reg', 'reg11', '2', 'B.Sc', 'Faculty', 'Temporary', '1', 'gdfv@gmail.com', '2021-01-29', '2021-01-29', '8142810504', '', 'Female', 'O+ve', 'wd', 'wd', 'wd', '512066', 1, '', '', ''),
(12, 'sample', 'bondalakunta', '', '25', '1', 'B.Tech', 'Management', 'Permanent', '0', 'bondalakunta@gmail.com', '2021-01-29', '2021-01-29', '8142810504', '', 'Male', 'O+ve', '32/80, Devuni kadapa', 'andhra pradesh', 'kadapa', '516002', 1, '', '', ''),
(14, 'hareesh', 'chekka c', 'hareesh.chekka', '33', '2', 'B.Tech', 'Faculty', 'Temporary', '0', 'hareesh123@gmail.com', '2021-01-29', '2021-01-29', '7981558794', '', 'Male', 'O-ve', 'yerraguntla', 'andhra pradesh', 'KADAPA', '516002', 1, '', '', ''),
(15, 'hareesh', 'chekka', 'hareesh.chekka', 'HA0129', '2', 'B.Tech', 'Faculty', 'Temporary', '0', 'hareesh1234@gmail.com', '2021-01-29', '2021-01-29', '7981558794', '', 'Male', 'O-ve', 'yerraguntla', 'andhra pradesh', 'KADAPA', '516002', 1, '', '', ''),
(16, 'hareesh', 'chekka', 'hareesh.chekka', 'HA0129', '2', 'B.Tech', 'Faculty', 'Temporary', '0', 'hareesh12345@gmail.com', '2021-01-29', '2021-01-29', '7981558794', '', 'Male', 'B+ve', 'yerraguntla', 'andhra pradesh', 'KADAPA', '516002', 1, '', '', ''),
(17, 'hareesh', 'chekka', 'hareesh.chekka', '', '2', 'B.Tech', 'Faculty', 'Temporary', '0', 'hareesh123456@gmail.com', '2021-01-29', '2021-01-29', '7981558794', '', 'Male', 'B+ve', 'yerraguntla', 'andhra pradesh', 'KADAPA', '516002', 1, '', '', ''),
(18, 'likitha', 'cheerla', 'likitha.cheerla', 'LIKI18', '', 'B.Tech', 'Faculty', 'Permanent', '0', 'cheerlalikitha@gmail.com', '2021-01-29', '2021-01-29', '8142810504', '7981558794', 'Female', 'O+ve', 'Chennur', 'andhra pradesh', 'kadapa', '516002', 1, '', '', ''),
(19, 'Afridi', 'Shaik', 'Afridi.Shaik', 'AFRI19', '11', 'other', 'Faculty', 'Temporary', '0', 'afridi@gmail.com', '1997-01-30', '2021-01-30', '7981558794', '7981558794', 'Male', 'O+ve', 'yerraguntla', 'andhra pradesh', 'kadapa', '516002', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentfee`
--

CREATE TABLE `studentfee` (
  `sid` varchar(100) NOT NULL,
  `htno` varchar(100) NOT NULL,
  `cfee` int(20) NOT NULL,
  `paid` int(20) NOT NULL,
  `lastpaid` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `modified` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `busfee` int(20) NOT NULL,
  `busfeepaid` int(20) NOT NULL,
  `blastpaid` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Hall_Ticket` varchar(100) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `DOJ` varchar(55) NOT NULL,
  `Student_PhNo` varchar(100) NOT NULL,
  `Parent_PhNo` varchar(10) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Blood_Group` varchar(100) NOT NULL,
  `Quota` varchar(100) NOT NULL,
  `regulation` varchar(10) NOT NULL,
  `Permanent_Address` varchar(200) NOT NULL,
  `State` varchar(100) NOT NULL,
  `District` varchar(108) NOT NULL,
  `Pin_code` varchar(100) NOT NULL,
  `Bus_Transport` varchar(120) NOT NULL,
  `College_Fee` bigint(10) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `tenth` varchar(100) NOT NULL,
  `twelve` varchar(100) NOT NULL,
  `sid` bigint(20) UNSIGNED NOT NULL,
  `joined_year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`First_Name`, `Last_Name`, `User_Name`, `Hall_Ticket`, `Year`, `Branch`, `user_email`, `DOB`, `DOJ`, `Student_PhNo`, `Parent_PhNo`, `Gender`, `Blood_Group`, `Quota`, `regulation`, `Permanent_Address`, `State`, `District`, `Pin_code`, `Bus_Transport`, `College_Fee`, `Father_Name`, `Mother_Name`, `tenth`, `twelve`, `sid`, `joined_year`) VALUES
('Sreedhar', 'bondalakunta', 'sreedhar@qik.com', '159h1a0409', '1', '1', 'bondalakuntasreedhar@gmail.com', '19/03/1997', '19/09/2019', '8142810504', '7981558794', 'Male', 'o+', 'Convenor', '', 'devuni kadapa', 'Andhrapradesh', 'Kadapa', '516002', 'Yes', 35000, 'NA', 'NA', '10', '10', 1, ''),
('naveen', 'narayna', '', '159h1a0439', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 2, ''),
('adi', 'narayna', '', '159h1a0413', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 3, ''),
('ramaan', 'reddy', '', '159h1a0434', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 4, ''),
('abhi', 'lash', '', '159h1a0401', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 5, ''),
('rampati', 'rajesh', '', '159h1a0450', '4', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 6, ''),
('malli', 'mysore', '', '159h1a0438', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 7, ''),
('raj', 'kumar', '', '159h1a0402', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 8, ''),
('ameer', 'khan', '', '159h1a0431', '3', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `branchid` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `topic` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `status` int(20) NOT NULL,
  `clsid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`branchid`, `subjectname`, `topic`, `date`, `status`, `clsid`) VALUES
('', '', 'UNIT 1:PHYSICALOPTICS', '2021-01-21 17:10:56', 0, ''),
('', '', ' LASERS AND FIBRE OPTICS\r\nPhysical Optics: Introduction to interference – Colours in thin films – Newton‘s Rings –\r\nMichelson interferometer – Fraunhofer diffraction due to single slit', '2021-01-21 17:10:56', 0, ''),
('', '', ' double slit – Diffraction\r\ngrating.\r\nLasers: Introduction – Characteristics of laser – Spontaneous and stimulated emission of\r\nradiation – Einstein‘s coefficients – Population inversion – Pumping mechaniqikmanage – Ruby laser –\r\nHe - Ne laser – Applications of lasers.\r\nFiber optics: Introduction–Principle of optical fiber –Numerical aperture and acceptance angle –\r\nTypes of optical fibers –Optical fiber communication system – Attenuation and losses in optical\r\nfibers – Applications of optical fibers.\r\nUNIT 2:CRYSTALLOGRAPHYAND QUANTUM MECHANICS\r\nCrystallography: Introduction – Space lattice –Unit cell – Lattice parameters –Bravias lattice –\r\nCrystal systems – Packing fractions of SC', '2021-01-21 17:10:56', 0, ''),
('', '', ' BCC and FCC – Miller indices – Interplanar spacing\r\nin cubic crystals – X-ray diffraction – Bragg‘s law –Laue method. \r\n(w.e.f 2015-2016)\r\nQuantumMechanics: Introduction to matter waves – de‘Broglie hypothesis – Schrodinger‘s time\r\nindependent wave equation – Significance of wave function – Particle in a one dimensional\r\ninfinite potential well.\r\nUNIT 3: FREE ELECTRON THEORY AND SEMICONDUCTORS\r\nFreeelectrontheory: Classical free electron theory – Sources of electrical resistance – Equation\r\nfor electrical conductivity – Quantum free electron theory – Fermi-Dirac distribution – KronigPenny model (qualitative) – Origin of bands in solids – Classification of solids into conductors', '2021-01-21 17:10:56', 0, ''),
('', '', '\r\nsemiconductors and insulators.\r\nSemiconductorphysics: Introduction – Intrinsic and extrinsic semiconductors – Drift & diffusion\r\ncurrents – Einstein‘s equation – Continuity equation – Hall Effect.\r\nUNIT 4: DIELECTRICSAND MAGNETIC MATERIALS\r\nDielectrics: Introduction – Dielectric Polarization – Types of Polarization – Lorentz field –\r\nClausius-Mosotti equation – Dielectric strength', '2021-01-21 17:10:56', 0, ''),
('', '', ' loss and breakdown.\r\nMagneticmaterials: Introduction – Basic definitions – Origin of magnetic moment –\r\nClassification of magnetic materials into dia', '2021-01-21 17:10:56', 0, ''),
('', '', ' para', '2021-01-21 17:10:56', 0, ''),
('', '', ' ferro', '2021-01-21 17:10:56', 0, ''),
('', '', ' antiferro and ferri magnetic materials –\r\nHysteresis – Soft and hard magnetic materials – Applications of magnetic materials.\r\nUNIT 5: ADVANCED MATERIALS\r\nSuperconductors: Introduction – Properties of superconductors – Meissner effect– Type I and\r\ntype II superconductors – ac and dc Josephson effects – BCS theory (qualitative) – High Tc\r\nsuperconductors – Applications of superconductors.\r\nNanomaterials: Introduction – Significance of nanoscale – Surface area and quantum\r\nconfinement – Physical properties: optical', '2021-01-21 17:10:56', 0, ''),
('', '', ' thermal', '2021-01-21 17:10:56', 0, ''),
('', '', ' mechanical and magnetic – Carbon\r\nnanotubes & its properties – Applications of nanomateials.\r\nSmartMaterials: Shape Memory Alloys: Definition – Two phases – One way and two way\r\nmemory effect – Pseudo elasticity – Applications of shape memory alloys.', '2021-01-21 17:10:56', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` varchar(100) NOT NULL,
  `year` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `p1` varchar(500) NOT NULL,
  `p2` varchar(500) NOT NULL,
  `p3` varchar(500) NOT NULL,
  `p4` varchar(500) NOT NULL,
  `p5` varchar(500) NOT NULL,
  `p6` varchar(500) NOT NULL,
  `p7` varchar(500) NOT NULL,
  `p8` varchar(500) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `break` varchar(30) NOT NULL,
  `branchid` varchar(100) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `year`, `sem`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `duration`, `break`, `branchid`, `id`) VALUES
('monday', 2, 1, 'python', 'hsavjd', 'asdad', 'dfsgfs', '', '', 'sfgdfg', '', '45', '10:31', '11', 1),
('tuesday', 2, 1, 'java', '', '', '', '', '', '', '', '45', '10:31', '11', 2),
('wednesday', 2, 1, 'sql', '', '', '', 'oracle', '', '', '', '45', '10:31', '11', 3),
('thursday', 2, 1, '', '', '', '', '', '', '', '', '45', '10:31', '11', 4),
('friday', 2, 1, '', '', '', '', '', '', '', '', '45', '10:31', '11', 5),
('saturday', 2, 1, '', '', '', '', '', '', '', '', '45', '10:31', '11', 6),
('monday', 2, 1, '', '', '', '', '', '', '', '', '50', '10:33', '13', 7),
('tuesday', 2, 1, '', '', '', '', '', '', '', '', '50', '10:33', '13', 8),
('wednesday', 2, 1, '', '', '', '', '', '', '', '', '50', '10:33', '13', 9),
('thursday', 2, 1, '', '', '', '', '', '', '', '', '50', '10:33', '13', 10),
('friday', 2, 1, '', '', '', '', '', '', '', '', '50', '10:33', '13', 11),
('saturday', 2, 1, '', '', '', '', '', '', '', '', '50', '10:33', '13', 12),
('monday', 5, 1, '', '', '', '', '', '', '', '', '1', '15:41', '11', 13),
('tuesday', 5, 1, '', '', '', '', '', '', '', '', '1', '15:41', '11', 14),
('wednesday', 5, 1, '', '', '', '', '', '', '', '', '1', '15:41', '11', 15),
('thursday', 5, 1, '', '', '', '', '', '', '', '', '1', '15:41', '11', 16),
('friday', 5, 1, '', '', '', '', '', '', '', '', '1', '15:41', '11', 17),
('saturday', 5, 1, '', '', '', '', '', '', '', '', '1', '15:41', '11', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` varchar(60) DEFAULT NULL,
  `password` varchar(2000) DEFAULT NULL,
  `emp_id` varchar(10) DEFAULT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `password`, `emp_id`, `fname`, `lname`, `role`) VALUES
('sreedhar@srts.com', '1234', '', 'sreedhar', 'bondalakunta', 'admin'),
('naveenjio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'naveen', 'jio', 'faculty'),
('najt@gmail.com', 'e691cb702f5d25642aa87009ef1948f8', '1234', 'naveen', 'jeevita', 'admin'),
('chandni@gmail.com', 'e691cb702f5d25642aa87009ef1948f8', '1234', 'naveen', 'rams', 'faculty'),
('sdsdd', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'sreedhar', 'bondalakunta', 'faculty'),
('erteryry', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'sreedhar', 'bondalakunta', 'faculty'),
('hello', '81dc9bdb52d04dc20036dbd8313ed055', '7', 'sreedhar', 'bondalakunta', 'faculty'),
('hyhyh', '81dc9bdb52d04dc20036dbd8313ed055', '8', 'naveen', 'shetty', 'faculty'),
('adi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9', 'Adi', 'Narayana', 'faculty'),
('Ramana qik.com', '81dc9bdb52d04dc20036dbd8313ed055', '10', 'Ramana', 'Reddy', 'faculty'),
('Ramana@qik.com', '81dc9bdb52d04dc20036dbd8313ed055', '11', 'Ramana', 'Reddy', 'faculty'),
('sunil@qik.com', '81dc9bdb52d04dc20036dbd8313ed055', '12', 'sunil', 'Kumar', 'faculty'),
('sreedhar@qik.com', '81dc9bdb52d04dc20036dbd8313ed055', '13', 'sreedhar', 'bondalakunta', 'faculty'),
('sridhar@qik.com', 'fbc6ee8f1f3d04721858f89e32aa85f6', '14', 'sreedhar', 'b', 'faculty'),
('hareesh.chekka', '7a96f9a2cf7202bcb1319d2883676765', 'HA0129', 'hareesh', 'chekka', 'Faculty'),
('hareesh.chekka', '7a96f9a2cf7202bcb1319d2883676765', 'HARE16', 'hareesh', 'chekka', 'Faculty'),
('likitha.cheerla', 'ce6c583301c11143539fc3b10905d060', 'LIKI18', 'likitha', 'cheerla', 'Faculty'),
('Afridi.Shaik', 'c18781961c9c0c22aba1cb9e49364139', 'AFRI19', 'Afridi', 'Shaik', 'Faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD UNIQUE KEY `clsid` (`clsid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD UNIQUE KEY `clgid` (`clgid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentfee`
--
ALTER TABLE `studentfee`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `id` (`sid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `bid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `clsid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `clgid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `studentfee`
--
ALTER TABLE `studentfee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
