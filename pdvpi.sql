-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 09:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdvpi`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteAktivitetil` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM aktivitetil WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteAktivitetiu` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM aktivitetiu WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteEvidencaL` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM evidencal WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteEvidencau` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM evidencau WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteIdeteEProjekteve` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM ideteprojekteved1 WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteLend` (IN `p_uid_lenda` INT)  DELETE  FROM lendet WHERE uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteLendaAsist` (IN `p_uid_lenda` INT, IN `p_uid` INT)  DELETE FROM lendasist WHERE asistenti = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteLendeProf` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM lendprof WHERE profesori = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteLendstud` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM lendstud WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteListaPrezantimeve` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM listaprezantimeve WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePAktivitetil` (IN `p_uid` INT)  DELETE FROM aktivitetil WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePAktivitetiu` (IN `p_uid` INT)  DELETE FROM aktivitetiu WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePEvidencaL` (IN `p_uid` INT)  DELETE FROM evidencal WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePEvidencaU` (IN `p_uid` INT)  DELETE FROM evidencau WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePIdeteEProjekteve` (IN `p_uid` INT)  DELETE FROM ideteprojekteved1 WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePLendstud` (IN `p_uid` INT)  DELETE FROM lendstud WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePListaPrezantimeve` (IN `p_uid` INT)  DELETE FROM listaprezantimeve WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePUsers` (IN `p_uid` INT)  DELETE FROM users WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeletePVlersimiFinal` (IN `p_uid` INT)  DELETE FROM vlersimi_final WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteVlersimi_Final` (IN `p_uid` INT, IN `p_uid_lenda` INT)  DELETE FROM vlersimi_final WHERE uid = p_uid AND uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Footertedhenat` ()  SELECT * FROM tedhenat WHERE pageLayout='pageLayout_copyright'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertADDLA` (IN `uid_lenda` INT, IN `asistenti` INT)  INSERT INTO lendasist (uid_lenda ,asistenti) VALUES(uid_lenda,asistenti)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertADDLende` (IN `lenda` VARCHAR(50))  INSERT INTO lendet (lenda) VALUES(lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertADDLP` (IN `uid_lenda` INT, IN `profesori` INT)  INSERT INTO lendprof (uid_lenda ,profesori) VALUES(uid_lenda,profesori)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertADDLSideteprojekteve` (IN `uid` INT(11), IN `uid_lenda` INT(11))  INSERT INTO ideteprojekteved1 VALUES(uid,uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertADDLSlendstud` (IN `uid` INT, IN `uid_lenda` INT)  INSERT INTO lendstud VALUES(uid,uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertAktivitetiL` (IN `p_uid` INT, IN `p_uid_lenda` INT)  INSERT INTO `aktivitetil`(`uid`,`uid_lenda`) VALUES (p_uid , p_uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertAktivitetiU` (IN `p_uid` INT, IN `p_uid_lenda` INT)  INSERT INTO `aktivitetiu`(`uid`,`uid_lenda`) VALUES (p_uid , p_uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertEvicencaU` (IN `p_uid` INT, IN `p_uid_lenda` INT)  INSERT INTO `evidencau`(`uid`,`uid_lenda`) VALUES (p_uid , p_uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertEvidencaL` (IN `p_uid` INT, IN `p_uid_lenda` INT)  INSERT INTO `evidencal`(`uid`,`uid_lenda`) VALUES (p_uid , p_uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertIdeteEProjekteve` (IN `p_uid` INT, IN `p_uid_lenda` INT, IN `p_uid_komentet_ideve` INT)  INSERT INTO `ideteprojekteved1`(`uid`, `uid_lenda`, `uid_komentet_ideve`) VALUES (p_uid , p_uid_lenda , p_uid_komentet_ideve)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertLendeStud` (IN `p_uid` INT, IN `p_uid_lenda` INT)  INSERT INTO `lendstud`(`uid`, `uid_lenda`) VALUES (p_uid , p_uid_lenda)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertListaPrezantimeve` (IN `p_uid` INT, IN `p_uid_IdetEProjekteve` INT, IN `p_uid_lenda` INT, IN `p_detyra1` INT, IN `p_detyra2` INT, IN `p_detyra3` INT, IN `p_detyra4` INT, IN `p_projekti` INT, IN `p_worddok` INT)  INSERT INTO `listaprezantimeve`( `uid`, `uid_IdetEProjekteve` , `uid_lenda`, `detyra1`, `detyra2`, `detyra3`, `detyra4`, `projekti`, `worddok`) VALUES (p_uid , p_uid_IdetEProjekteve , p_uid_lenda , p_detyra1 , p_detyra2 , p_detyra3
, p_detyra4 , p_projekti , p_worddok)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertPerdoruesusers` (IN `username` VARCHAR(50), IN `password` VARCHAR(50), IN `email` VARCHAR(50), IN `ID_usersRole` INT, IN `uid_Student` VARCHAR(20), IN `mbiemri` VARCHAR(50))  INSERT IGNORE INTO users (username , password , email , ID_usersRole , uid_Student , mbiemri) VALUES(username , password , email , ID_usersRole , uid_Student , mbiemri)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertVlersimiFinal` (IN `p_uid` INT, IN `p_uid_lenda` INT, IN `p_Detyra1` INT, IN `p_EvidencaL` INT, IN `p_AktivitetiL` INT, IN `p_EvidencaU` INT, IN `p_AktivitetiU` INT)  INSERT INTO `vlersimi_final`(`uid`, `uid_lenda` , `Detyra1` ,`EvidencaL` , `AktivitetiL` , `EvidencaU` , `AktivitetiU`) VALUES 
(p_uid , p_uid_lenda , p_Detyra1 , p_EvidencaL , p_AktivitetiL , p_EvidencaU , p_AktivitetiU)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelcetTermLendetASist` (IN `p_term` VARCHAR(200))  SELECT
             s.uid,
                s.username,
                s.mbiemri,
                s.email,
                k.lenda,
                p.uid_lenda
                FROM
                 `lendasist` p
                INNER JOIN
                users s ON p.asistenti = s.uid  
                LEFT OUTER JOIN `lendet` k ON p.uid_lenda = k.uid_lenda 
             
           
                                        WHERE
                                        s.username LIKE CONCAT('%', p_term , '%') OR  s.mbiemri LIKE CONCAT('%', p_term , '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAKtivitetiLP` (IN `p_id` INT)  SELECT
	p.uid_aktivitetil,
	p.uid,
	p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,
    p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,
    p.TotalAL,p.Piket,
	s.uid_Student,
	s.username,
	s.mbiemri,
	l.lenda,
	l.uid_lenda
	FROM
	 `aktivitetil` p
	INNER JOIN
	users s ON p.uid = s.uid  
		LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
	 
	WHERE l.uid_lenda = p_id ORDER BY s.username ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAktivitetinL` (IN `p_login_user` VARCHAR(50), IN `p_id` INT)  SELECT
								p.uid_aktivitetil,
								p.uid,
								p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,
                                p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,
                                p.Java15,p.TotalAL,p.Piket,
								s.uid_Student,
								s.username,
								s.email,
								s.mbiemri,
								l.lenda
								FROM
								 `aktivitetil` p
								INNER JOIN
								users s ON p.uid = s.uid  
									LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
								
									
								WHERE l.uid_lenda = p_id and s.email = p_login_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAktivitetinLP` (IN `p_id` INT)  SELECT
                        p.uid_aktivitetil,
                        p.uid,
                        p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,
                        p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,
                        p.TotalAL,p.Piket,
                        s.uid_Student,
                        s.username,
                        s.mbiemri,
                        l.lenda,
                                                l.uid_lenda
                        FROM
                         `aktivitetil` p
                        INNER JOIN
                        users s ON p.uid = s.uid  
                        	LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                            
                           WHERE l.uid_lenda = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAktivitetinU` (IN `p_id` INT, IN `p_login_user` VARCHAR(50))  SELECT
								p.uid_aktivitetiu,
								p.uid,
								p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,
                                p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,
                                p.TotalAU,p.Piket,
								s.uid_Student,
								s.username,
								s.email,
								s.mbiemri,
								l.lenda
								FROM
								 `aktivitetiu` p
								INNER JOIN
								users s ON p.uid = s.uid  
									LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
								
									
								WHERE l.uid_lenda = p_id and s.email = p_login_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAktivitetiU` (IN `p_j1` INT, IN `p_j2` INT, IN `p_j3` INT, IN `p_j4` INT, IN `p_j5` INT, IN `p_j6` INT, IN `p_j7` INT, IN `p_j8` INT, IN `p_j9` INT, IN `p_j10` INT, IN `p_j11` INT, IN `p_j12` INT, IN `p_j13` INT, IN `p_j14` INT, IN `p_j15` INT, IN `p_uidA` INT)  NO SQL
UPDATE aktivitetiu SET
                                Java1 = p_j1 , Java2= p_j2, Java3= p_j3, Java4= p_j4, Java5= p_j5,
                                Java6= p_j6, Java7= p_j7, Java8= p_j8, Java9= p_j9, Java10= p_j10,
                                Java11= p_j11, Java12= p_j12, Java13= p_j13, Java14=p_j14, Java15=p_j15
                                WHERE uid_aktivitetiu= p_uidA$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAktivitetiUExel` (IN `p_id` INT)  NO SQL
SELECT
    p.uid_aktivitetiu,
    p.uid,
    p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalAU,p.Piket,
    s.uid_Student,
    s.username,
    s.email,
    s.mbiemri,
    l.uid_lenda,
    l.lenda
    FROM
     aktivitetiu p
     INNER JOIN
    users s ON p.uid = s.uid 
        LEFT OUTER JOIN lendet l ON p.uid_lenda = l.uid_lenda 

      WHERE l.uid_lenda = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAktivitetiULend` (IN `p_id` INT)  NO SQL
SELECT
                                p.uid_aktivitetiu,
                                p.uid,
                                p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalAU,p.Piket,
                                s.uid_Student,
                                s.username,
                                s.email,
                                s.mbiemri,
                                l.uid_lenda,
                                l.lenda
                                FROM
                                 aktivitetiu p
                                 INNER JOIN
                                users s ON p.uid = s.uid 
                                    LEFT OUTER JOIN lendet l ON p.uid_lenda = l.uid_lenda 

                                  WHERE l.uid_lenda = p_id ORDER BY s.username ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectAsist` (IN `p_user` VARCHAR(50))  NO SQL
SELECT  u.email , l.lenda , s.asistenti , l.uid_lenda FROM lendasist s
                        LEFT OUTER JOIN lendet l ON s.uid_lenda = l.uid_lenda 
                        LEFT OUTER JOIN users u ON s.asistenti = u.uid
                        WHERE u.email = p_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectButonProf` (IN `p_login_user` VARCHAR(50))  SELECT  u.email , l.lenda , s.profesori , l.uid_lenda FROM lendprof s  
										LEFT OUTER JOIN `lendet` l ON s.uid_lenda = l.uid_lenda 
										LEFT OUTER JOIN `users` u ON s.profesori = u.uid
										WHERE u.email = p_login_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectCheck` (IN `p_user_check` VARCHAR(50))  SELECT email FROM users WHERE email = p_user_check$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectDESCAktivitetiL` ()  SELECT `uid_aktivitetil` FROM `aktivitetil` ORDER BY `uid_aktivitetil` DESC LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectDESCAktivitetiU` ()  SELECT `uid_aktivitetiu` FROM `aktivitetiu` ORDER BY `uid_aktivitetiu` DESC LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectDESCEvidencaL` ()  SELECT `uid_Evidenca` FROM `evidencal` ORDER BY `uid_Evidenca` DESC LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectDESCEvidencaU` ()  SELECT `uid_EvidencaU` FROM `evidencau` ORDER BY `uid_EvidencaU` DESC LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectDESCIdeteEProjekteve` ()  SELECT `uid_IdetEProjekteve` FROM `ideteprojekteved1` ORDER BY `uid_IdetEProjekteve` DESC LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectEvidencenL` (IN `p_id` INT, IN `p_login_user` VARCHAR(50))  SELECT
	p.uid_Evidenca,
	p.uid,
	p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,
    p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,
    p.Java14,p.Java15,p.TotalEL,p.Piket,
	s.uid_Student,
	s.username,
	s.email,
	s.mbiemri,
	l.lenda
	FROM
	 `evidencal` p
	INNER JOIN
	users s ON p.uid = s.uid  
		LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
	
		
	WHERE l.uid_lenda = p_id and s.email = p_login_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SElectEvidencenLP` (IN `p_id` INT)  SELECT
	p.uid_Evidenca,
	p.uid,
	p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,
    p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,
    p.Java15,p.TotalEL,p.Piket,
	s.uid_Student,
	s.username,
	s.mbiemri,
	l.uid_lenda,
	l.lenda
	FROM
	 `evidencal` p
	INNER JOIN
	users s ON p.uid = s.uid  
		LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
		WHERE l.uid_lenda = p_id ORDER BY s.username ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectEvidencenP` (IN `p_id` INT, IN `p_login_user` VARCHAR(50))  SELECT
	p.`uid_EvidencaU`,
	p.uid,
	p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,
    p.Java8,
    p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,
    p.Java15,p.`TotalEU`,p.Piket,
	s.uid_Student,
	s.username,
	s.email,
	s.mbiemri,
	l.lenda
	FROM
	 `evidencau` p
	INNER JOIN
	users s ON p.uid = s.uid  
		LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
	
		
	WHERE l.uid_lenda = p_id and s.email = p_login_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectEvidU` (IN `p_id` INT)  NO SQL
SELECT
    p.uid_EvidencaU,
    p.uid,

    p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalEU,p.Piket,
    s.uid_Student,
    s.username,
    s.email,
    s.mbiemri,
    l.uid_lenda,
    l.lenda
    FROM
     evidencau p
     INNER JOIN
    users s ON p.uid = s.uid

        LEFT OUTER JOIN lendet l ON p.uid_lenda = l.uid_lenda 

      WHERE l.uid_lenda = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectExcelStud` (IN `p_id` INT)  SELECT
    u.uid,ls.uid_lenda,u.uid_Student, u.username, u.mbiemri, u.email, l.lenda
            FROM
             lendstud ls
                LEFT OUTER JOIN lendet l ON ls.uid_lenda = l.uid_lenda 
                LEFT OUTER JOIN users u ON ls.uid = u.uid 

                WHERE l.uid_lenda = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFAFormulat` ()  SELECT `FA` FROM formulat$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFormulaFE` ()  SELECT FE FROM formulat$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFormulat` ()  SELECT uid_formulat , FormulaDetyraV ,  F10 , F9 ,  F8 ,  F7 , F6 ,
Provimimeivogel , FE , FA  FROM formulat$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectIdeteEProjekteveULend` (IN `p_id` INT)  SELECT
                p.uid_IdetEProjekteve,
                p.uid,
                p.TitulliProjektit,
                p.Koment,
                s.uid_Student,
                s.username,
                s.mbiemri,
                s.email,
                l.lenda,
                i.uid_komentet_ideve,
                i.KomentetEIdeve,
                    p.KomentProf
                FROM
                 ideteprojekteved1 p
                INNER JOIN
                users s ON p.uid = s.uid
                LEFT OUTER JOIN lendet l ON p.uid_lenda = l.uid_lenda 
                  LEFT OUTER JOIN komentet_ideve i ON p.uid_komentet_ideve = i.uid_komentet_ideve 
                WHERE l.uid_lenda = p_id ORDER BY s.username ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectIDStud` (IN `p_uid_Student` VARCHAR(20))  SELECT `uid`,`uid_Student`,`username`,`mbiemri`,`email`,`password`,
`ID_usersRole` FROM `users` WHERE `uid_Student` = p_uid_Student$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectIDURole2` ()  SELECT * FROM  users where ID_usersRole = 2$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectIDURole3` ()  SELECT * FROM  users where ID_usersRole = 3$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectImportAktivitetiL` (IN `p_uid` INT)  SELECT `uid_aktivitetil`, `uid`, `Java1`, `Java2`, `Java3`, `Java4`, `Java5`, `Java6`, `Java7`, `Java8`, `Java9`, `Java10`, `Java11`, `Java12`, `Java13`, `Java14`, `Java15`, `TotalAL`, `Piket`, `uid_lenda` FROM `aktivitetil` WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectLendet` ()  SELECT * FROM lendet$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectListenPrezantimeve` (IN `p_id` INT)  SELECT
	p.`uid_ListaPrezantimeve`,
	p.uid,
	p.`uid_IdetEProjekteve`,
	p.`uid_lenda`,
	p.`detyra1`,
	p.`detyra2`,
	p.`detyra3`,
	p.`detyra4`,
	l.lenda,
	p.`projekti`,
	p.`worddok`,
	p.`data_prezantimit`,
	d.`Aprovim/Refuzim`,
	s.uid_Student,
	s.username,
	s.mbiemri,
    s.email,
	k.TitulliProjektit,
	p.Komenti
	FROM
	 `listaprezantimeve` p
	INNER JOIN
	users s ON p.uid = s.uid  
	LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
	  LEFT OUTER JOIN `detyrat` d ON p.detyra1 = d.uid_Detyrat 
	  LEFT OUTER JOIN `ideteprojekteved1` k ON p.uid_IdetEProjekteve = k.uid_IdetEProjekteve 
	WHERE l.uid_lenda = p_id ORDER BY s.username ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectLogAdmin` (IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(50), IN `p_ID_usersRole` INT)  SELECT uid FROM users WHERE email = p_username and password = p_password and ID_usersRole = p_ID_usersRole$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectLogAsist` (IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(50), IN `p_ID_usersRole` INT)  SELECT uid FROM users WHERE email = p_username and password = p_password and ID_usersRole = p_ID_usersRole$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectLogProf` (IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(50), IN `p_ID_usersRole` INT)  SELECT uid FROM users WHERE email = p_username and password = p_password and ID_usersRole = p_ID_usersRole$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectLogStud` (IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(50), IN `p_ID_usersRole` INT)  SELECT uid FROM users WHERE email = p_username and password = p_password and ID_usersRole = p_ID_usersRole$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectMenuAdmin` ()  SELECT * FROM tedhenat WHERE PageLayout='menuAdmin'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectMenyAss` ()  SELECT * FROM menyt WHERE Menyt='MenytAss'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectMenyProf` ()  SELECT * FROM menyt WHERE Menyt='MenytProf'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectMenytMod` (IN `p_ID_Menyt` INT)  SELECT * FROM menyt WHERE ID_Menyt = p_ID_Menyt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectShfaq` (IN `p_id` INT)  SELECT shfaq FROM vlersimi_final  WHERE uid_lenda = p_id AND shfaq = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectShfaqIdeteEProjektit` (IN `p_id` INT)  SELECT shfaq FROM ideteprojekteved1  WHERE uid_lenda = p_id AND shfaq = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectShfaqListenEPrezantimeve` (IN `p_id` INT)  SELECT shfaq FROM listaprezantimeve  WHERE uid_lenda = p_id AND shfaq = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Selecttedhenatheader` ()  SELECT * FROM tedhenat WHERE PageLayout='Header'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectTermLenda` (IN `p_term2` VARCHAR(200))  SELECT
uid_lenda,
lenda
FROM
lendet 
WHERE
lenda LIKE CONCAT('%', p_term2 , '%') OR  lenda LIKE CONCAT('%', p_term2 , '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectTermLendProf` (IN `p_term` VARCHAR(200))  SELECT
             s.uid,
                s.username,
                s.mbiemri,
                s.email,
                k.lenda,
                p.uid_lenda
                FROM
                 `lendprof` p
                INNER JOIN
                users s ON p.profesori = s.uid  
                LEFT OUTER JOIN `lendet` k ON p.uid_lenda = k.uid_lenda 
             
           
                                        WHERE
                                        s.username LIKE CONCAT('%', p_term , '%') OR  s.mbiemri LIKE CONCAT('%', p_term , '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectTermLendStud` (IN `p_term` VARCHAR(200))  SELECT
             s.uid,
			 s.uid_Student,
                s.username,
                s.mbiemri,
                s.email,
                k.lenda,
                p.uid_lenda
                FROM
                 `lendstud` p
                INNER JOIN
                users s ON p.uid = s.uid  
                LEFT OUTER JOIN `lendet` k ON p.uid_lenda = k.uid_lenda 
             
           
                                        WHERE
                                        s.username LIKE CONCAT('%', p_term , '%') OR  s.uid_Student LIKE CONCAT('%', p_term , '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectTermMenyt` (IN `p_term2` VARCHAR(200))  SELECT `ID_Menyt`,`Menyt`, `MenyB` , `MenyE`,`MenyA`,`Idet`,`Prezantimet`,`Vlersimi`,`Konfigurimet`,`Ckycu` FROM `menyt` WHERE  Menyt
										LIKE CONCAT('%', p_term2 , '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectTermTitulli` (IN `p_term` VARCHAR(200))  SELECT `uid_TeDhenat`,`titulli`,`pershkrimi`,`file`,`pageLayout` FROM `tedhenat` WHERE  titulli
										LIKE CONCAT('%', p_term , '%') OR pageLayout LIKE CONCAT('%', p_term , '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectTermURole` (IN `p_term` VARCHAR(200))  SELECT
										u.uid,
                                        u.uid_Student,
                                        u.mbiemri,
                                        u.username,
                                        u.password,
                                        ur.` usersRole`,
                                        u.email,
                                        ur.ID_usersRole
                                        FROM
                                        users u
                                        INNER JOIN
                                        ` users_role` ur ON u.ID_usersRole = ur.ID_usersRole  
                                       WHERE
                                        u.username LIKE CONCAT('%', p_term , '%') OR  u.uid_Student LIKE CONCAT('%', p_term , '%') ORDER BY ur.` usersRole`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectUIDRole4` ()  SELECT * FROM  users where ID_usersRole = 4$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectUIDUIDLenda` (IN `p_uid` INT, IN `p_id` INT)  SELECT uid , uid_lenda FROM lendstud WHERE uid = p_uid and uid_lenda = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectUsersAdmin` (IN `p_uid` INT)  SELECT * FROM users WHERE uid = p_uid
ORDER BY ID DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectVlersimiFinal` (IN `p_id` INT)  SELECT
                                v.uid_vlersimiF,
                                v.uid,
                                i.TitulliProjektit,
                                v.Detyra2,
                                v.Detyra3,
                                v.Detyra4,
                                v.DorzimiProjektit,
                                v.Prezantimi,
                                v.TotalP,
                                v.Detyrat,
                                v.Totali,
                                v.Provimi,
                                v.TotaliPike,
                                v.Nota,
                                v.EvidencaL,
                                v.AktivitetiL,
                                v.EvidencaU,
                                v.AktivitetiU,
                                s.uid_Student,
                                s.username,
                                s.mbiemri,
                                l.lenda,
                                el.TotalEL,
                                eu.TotalEU,
                                al.TotalAL,
                                au.TotalAU,
                                v.uid_lenda
                            FROM
                                vlersimi_final v
                            INNER JOIN users s ON
                                v.uid = s.uid
                            LEFT OUTER JOIN lendet l ON
                                v.uid_lenda = l.uid_lenda
                                LEFT OUTER JOIN ideteprojekteved1 i ON
                                v.Detyra1 = i.uid_IdetEProjekteve
                                  LEFT OUTER JOIN evidencal el ON
                                v.EvidencaL = el.uid_Evidenca
                                      LEFT OUTER JOIN evidencau eu ON
                                v.EvidencaU = eu.uid_EvidencaU
                                    LEFT OUTER JOIN aktivitetil al ON
                                v.AktivitetiL = al.uid_aktivitetil
                                    LEFT OUTER JOIN aktivitetiu au ON
                                v.AktivitetiU = au.uid_aktivitetiu
                            WHERE
                                l.uid_lenda = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_session_UID` (IN `p_uid` INT)  SELECT  s.profesori , l.lenda FROM lendprof s  
LEFT OUTER JOIN `lendet` l ON s.uid_lenda = l.uid_lenda 
LEFT OUTER JOIN `users` u ON u.username = l.uid_lenda 
WHERE s.profesori = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_session_UIDA` (IN `p_uid` INT)  SELECT  s.asistenti , l.lenda FROM lendasist s  
LEFT OUTER JOIN `lendet` l ON s.uid_lenda = l.uid_lenda 
LEFT OUTER JOIN `users` u ON u.username = l.uid_lenda 
WHERE s.asistenti = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelektoIdentEProjekteve` (IN `p_id` INT)  SELECT
                    p.uid_IdetEProjekteve,
                    p.uid,
                    p.`TitulliProjektit`,
                    p.`Koment`,
                    s.uid_Student,
                    s.username,
                    s.mbiemri,
                    s.email,
                    l.lenda,
                    i.`uid_komentet_ideve`,
                    i.KomentetEIdeve,
                    p.KomentProf
                    FROM
                     `ideteprojekteved1` p
                    INNER JOIN
                    users s ON p.uid = s.uid  
                    LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                      LEFT OUTER JOIN `komentet_ideve` i ON p.uid_komentet_ideve = i.uid_komentet_ideve
                      
                    WHERE l.uid_lenda = p_id ORDER BY s.username ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelektoLendeStud` (IN `p_user` VARCHAR(50))  SELECT l.lenda , s.`uid`, l.uid_lenda, u.email FROM lendstud s LEFT OUTER JOIN `lendet` l ON s.uid_lenda = l.uid_lenda LEFT OUTER JOIN `users` u ON s.`uid` = u.`uid` WHERE u.email = p_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelektoMenyStud` ()  SELECT * FROM menyt WHERE Menyt='MenyStud'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelektoStudEmail` (IN `p_login_user` VARCHAR(50))  SELECT * FROM users WHERE email = p_login_user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdataVlersiminFinal` (IN `p_Detyra2` DOUBLE, IN `p_Detyra3` DOUBLE, IN `p_Detyra4` DOUBLE, IN `p_DorzimiProjektit` DOUBLE, IN `p_Prezantimi` DOUBLE, IN `p_Provimi` DOUBLE, IN `p_uid_vlersimiF` INT)  UPDATE vlersimi_final SET  
					Detyra2 = p_Detyra2 , Detyra3 = p_Detyra3 , Detyra4 = p_Detyra4 , DorzimiProjektit = p_DorzimiProjektit , Prezantimi = p_Prezantimi ,
					  Provimi = p_Provimi 
					WHERE uid_vlersimiF = p_uid_vlersimiF$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateAktivitetiL` (IN `p_Java1` INT, IN `p_Java2` INT, IN `p_Java3` INT, IN `p_Java4` INT, IN `p_Java5` INT, IN `p_Java6` INT, IN `p_Java7` INT, IN `p_Java8` INT, IN `p_Java9` INT, IN `p_Java10` INT, IN `p_Java11` INT, IN `p_Java12` INT, IN `p_Java13` INT, IN `p_Java14` INT, IN `p_Java15` INT, IN `p_uid_aktivitetil` INT)  UPDATE aktivitetil SET  
               Java1 = p_Java1 , Java2 = p_Java2 , Java3 = p_Java3 , Java4 = p_Java4 , Java5 = p_Java5 ,
               Java6 = p_Java6 , Java7 = p_Java7 , Java8 = p_Java8 , Java9 = p_Java9 , Java10 = p_Java10 ,
               Java11 = p_Java11 , Java12 = p_Java12 , Java13 = p_Java13 , Java14 = p_Java14 , Java15 = p_Java15
               WHERE uid_aktivitetil = p_uid_aktivitetil$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateAktivitetiLPiket` ()  UPDATE
               aktivitetil
               SET
               Piket =
               	Java1 + Java2 + Java3 + Java4 + Java5 + Java6 + Java7 + Java8 + Java9 + Java10 + Java11 + Java12 + Java13 + Java14 + Java15$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateEvidencaL` (IN `p_Java1` INT, IN `p_Java2` INT, IN `p_Java3` INT, IN `p_Java4` INT, IN `p_Java5` INT, IN `p_Java6` INT, IN `p_Java7` INT, IN `p_Java8` INT, IN `p_Java9` INT, IN `p_Java10` INT, IN `p_Java11` INT, IN `p_Java12` INT, IN `p_Java13` INT, IN `p_Java14` INT, IN `p_Java15` INT, IN `p_uid_Evidenca` INT)  UPDATE evidencal SET  
								Java1 = p_Java1 , Java2 = p_Java2 , Java3 = p_Java3 , Java4 = p_Java4 , Java5 = p_Java5 ,
								Java6 = p_Java6 , Java7 = p_Java7 , Java8 = p_Java8 , Java9 = p_Java9 , Java10 = p_Java10 ,
								Java11 = p_Java11 , Java12 = p_Java12 , Java13 = p_Java13 , Java14 = p_Java14 , Java15 = p_Java15
								WHERE uid_Evidenca = p_uid_Evidenca$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateFormulat` (IN `p_FormulaDetyraV` VARCHAR(50), IN `p_F10` VARCHAR(50), IN `p_F9` VARCHAR(50), IN `p_F8` VARCHAR(50), IN `p_F7` VARCHAR(50), IN `p_F6` VARCHAR(50), IN `p_Provimimeivogel` VARCHAR(50), IN `p_FE` VARCHAR(50), IN `p_FA` VARCHAR(50))  UPDATE formulat set FormulaDetyraV = p_FormulaDetyraV , F10 = p_F10 , F9 = p_F9 , F8 = p_F8 , F7 = p_F7 , F6 = p_F6 , Provimimeivogel =  p_Provimimeivogel , FE = p_FE , FA = p_FA$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateIdeteEProjekteveU` (IN `p_TitulliProjektit` VARCHAR(100), IN `p_uid_komentet_ideve` INT, IN `p_Koment` VARCHAR(2000), IN `p_uid_IdetEProjekteve` INT)  UPDATE ideteprojekteved1 SET
                                        TitulliProjektit=p_TitulliProjektit, uid_komentet_ideve=p_uid_komentet_ideve, Koment=p_Koment
                                        WHERE uid_IdetEProjekteve=p_uid_IdetEProjekteve$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateImportAktivitetiL` (IN `p_uid_aktivitetil` INT, IN `p_Java1` INT, IN `p_Java2` INT, IN `p_Java3` INT, IN `p_Java4` INT, IN `p_Java5` INT, IN `p_Java6` INT, IN `p_Java7` INT, IN `p_Java8` INT, IN `p_Java9` INT, IN `p_Java10` INT, IN `p_Java11` INT, IN `p_Java12` INT, IN `p_Java13` INT, IN `p_Java14` INT, IN `p_Java15` INT, IN `p_TotalAL` DOUBLE, IN `p_Piket` INT, IN `p_id` INT, IN `p_uid` INT)  UPDATE aktivitetil SET uid_aktivitetil = p_uid_aktivitetil ,
 Java1 = p_Java1 , Java2 = p_Java2 , Java3 = p_Java3 
        , Java4 = p_Java4 , Java5 = p_Java5 , Java6 = p_Java6 ,
        Java7 = p_Java7 , Java8 = p_Java8 , Java9 = p_Java9 ,
        Java10 = p_Java10
        , Java11 = p_Java11 , Java12 = p_Java12 , Java13 = 
        p_Java13
        , Java14 = p_Java14 , Java15 = p_Java15 , TotalAL = p_TotalAL ,
        Piket = p_Piket , uid_lenda = p_id WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateLendet` (IN `p_lenda` VARCHAR(50), IN `p_uid_lenda` INT)  UPDATE lendet SET lenda = p_lenda WHERE uid_lenda = p_uid_lenda$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateMeny` (IN `p_Menyt` VARCHAR(250), IN `p_MenyB` VARCHAR(250), IN `p_MenyE` VARCHAR(250), IN `p_MenyA` VARCHAR(250), IN `p_Idet` VARCHAR(250), IN `p_Prezantimet` VARCHAR(250), IN `p_Vlersimi` VARCHAR(250), IN `p_Konfigurimet` VARCHAR(250), IN `p_Ckycu` VARCHAR(250), IN `p_ID_Menyt` INT)  UPDATE menyt SET Menyt = p_Menyt , MenyB = p_MenyB , MenyE = p_MenyE , 	 MenyA = p_MenyA , Idet = p_Idet , Prezantimet = p_Prezantimet , Vlersimi = p_Vlersimi , Konfigurimet = p_Konfigurimet , Ckycu = p_Ckycu WHERE ID_Menyt = p_ID_Menyt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdatePerdorues` (IN `p_uid_Student` VARCHAR(20), IN `p_username` VARCHAR(50), IN `p_mbiemri` VARCHAR(50), IN `p_password` VARCHAR(50), IN `p_email` VARCHAR(50), IN `p_ID_usersRole` INT, IN `p_uid` INT)  UPDATE users SET uid_Student = p_uid_Student , username = p_username , mbiemri = p_mbiemri , password = p_password , email = p_email , ID_usersRole = p_ID_usersRole WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdatePiketAU` ()  NO SQL
UPDATE
                                aktivitetiu
                                SET
                                Piket =
                                    Java1 + Java2 + Java3 + Java4 + Java5 + Java6 + Java7 + Java8 + Java9 + Java10 + Java11 + Java12 + Java13 + Java14 + Java15$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdatePiketEvidenca` ()  UPDATE
								evidencal
								SET
								Piket =
									Java1 + Java2 + Java3 + Java4 + Java5 + Java6 + Java7 + Java8 + Java9 + Java10 + Java11 + Java12 + Java13 + Java14 + Java15$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateTeDhenat` (IN `p_titulli` VARCHAR(1000), IN `p_pershkrimiM` VARCHAR(10000), IN `p_file` VARCHAR(255), IN `p_PageLayout` VARCHAR(50), IN `p_uid_TeDhenat` INT)  UPDATE tedhenat SET titulli = p_titulli , pershkrimi = p_pershkrimiM , file = p_file , PageLayout = p_PageLayout WHERE uid_TeDhenat = p_uid_TeDhenat$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateUsersP` (IN `p_uid` INT, IN `p_password` VARCHAR(50))  UPDATE `users` SET `password` = p_password WHERE uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `usersRole` ()  SELECT `ID_usersRole`, ` usersRole` FROM ` users_role`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `VlersimiFinalStud` (IN `p_id` INT)  SELECT
                                v.`uid_vlersimiF`,
                                v.uid,
                                i.TitulliProjektit,
                                 v.KomnetDetyra1,
								v.Detyra2,
								v.KomentDetyra2,
								v.Detyra3,
								v.KomentDetyra3,
								v.Detyra4,
								v.KomnetDetyra4,
								v.DorzimiProjektit,
								v.KomentiDorzimiProjekti,
								v.Prezantimi,
								v.KomentPrezantimi,
                                v.TotalP,
                                v.Detyrat,
                                v.Totali,
                                v.Provimi,
                                v.TotaliPike,
                                v.Nota,
                                s.uid_Student,
                                s.username,
                                s.mbiemri,
                                s.email,
                                l.lenda,
                                el.TotalEL,
                                eu.TotalEU,
                                al.TotalAL,
                                au.TotalAU
                            FROM
                                `vlersimi_final` v
                            INNER JOIN users s ON
                                v.uid = s.uid
                            LEFT OUTER JOIN `lendet` l ON
                                v.uid_lenda = l.uid_lenda
                                LEFT OUTER JOIN `ideteprojekteved1` i ON
                                v.`Detyra1` = i.uid_IdetEProjekteve
                                  LEFT OUTER JOIN `evidencal` el ON
                                v.`EvidencaL` = el.uid_Evidenca
                                      LEFT OUTER JOIN `evidencau` eu ON
                                v.`EvidencaU` = eu.uid_EvidencaU
                                    LEFT OUTER JOIN `aktivitetil` al ON
                                v.`AktivitetiL` = al.uid_aktivitetil
                                    LEFT OUTER JOIN `aktivitetiu` au ON
                                v.`AktivitetiU` = au.uid_aktivitetiu
                            WHERE
                                l.uid_lenda = p_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `aktivitetil`
--

CREATE TABLE `aktivitetil` (
  `uid_aktivitetil` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `Java1` int(11) NOT NULL,
  `Java2` int(11) NOT NULL,
  `Java3` int(11) NOT NULL,
  `Java4` int(11) NOT NULL,
  `Java5` int(11) NOT NULL,
  `Java6` int(11) NOT NULL,
  `Java7` int(11) NOT NULL,
  `Java8` int(11) NOT NULL,
  `Java9` int(11) NOT NULL,
  `Java10` int(11) NOT NULL,
  `Java11` int(11) NOT NULL,
  `Java12` int(11) NOT NULL,
  `Java13` int(11) NOT NULL,
  `Java14` int(11) NOT NULL,
  `Java15` int(11) NOT NULL,
  `TotalAL` double(10,1) NOT NULL,
  `Piket` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivitetil`
--

INSERT INTO `aktivitetil` (`uid_aktivitetil`, `uid`, `Java1`, `Java2`, `Java3`, `Java4`, `Java5`, `Java6`, `Java7`, `Java8`, `Java9`, `Java10`, `Java11`, `Java12`, `Java13`, `Java14`, `Java15`, `TotalAL`, `Piket`, `uid_lenda`) VALUES
(17, 155, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(18, 160, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(19, 161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(20, 166, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aktivitetiu`
--

CREATE TABLE `aktivitetiu` (
  `uid_aktivitetiu` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `Java1` int(11) NOT NULL,
  `Java2` int(11) NOT NULL,
  `Java3` int(11) NOT NULL,
  `Java4` int(11) NOT NULL,
  `Java5` int(11) NOT NULL,
  `Java6` int(11) NOT NULL,
  `Java7` int(11) NOT NULL,
  `Java8` int(11) NOT NULL,
  `Java9` int(11) NOT NULL,
  `Java10` int(11) NOT NULL,
  `Java11` int(11) NOT NULL,
  `Java12` int(11) NOT NULL,
  `Java13` int(11) NOT NULL,
  `Java14` int(11) NOT NULL,
  `Java15` int(11) NOT NULL,
  `TotalAU` double(10,1) NOT NULL,
  `Piket` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivitetiu`
--

INSERT INTO `aktivitetiu` (`uid_aktivitetiu`, `uid`, `Java1`, `Java2`, `Java3`, `Java4`, `Java5`, `Java6`, `Java7`, `Java8`, `Java9`, `Java10`, `Java11`, `Java12`, `Java13`, `Java14`, `Java15`, `TotalAU`, `Piket`, `uid_lenda`) VALUES
(17, 155, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(18, 160, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(19, 161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(20, 166, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detyrat`
--

CREATE TABLE `detyrat` (
  `uid_Detyrat` int(11) NOT NULL,
  `Aprovim/Refuzim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detyrat`
--

INSERT INTO `detyrat` (`uid_Detyrat`, `Aprovim/Refuzim`) VALUES
(1, 'PO'),
(2, 'JO');

-- --------------------------------------------------------

--
-- Table structure for table `evidencal`
--

CREATE TABLE `evidencal` (
  `uid_Evidenca` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `Java1` int(11) NOT NULL,
  `Java2` int(11) NOT NULL,
  `Java3` int(11) NOT NULL,
  `Java4` int(11) NOT NULL,
  `Java5` int(11) NOT NULL,
  `Java6` int(11) NOT NULL,
  `Java7` int(11) NOT NULL,
  `Java8` int(11) NOT NULL,
  `Java9` int(11) NOT NULL,
  `Java10` int(11) NOT NULL,
  `Java11` int(11) NOT NULL,
  `Java12` int(11) NOT NULL,
  `Java13` int(11) NOT NULL,
  `Java14` int(11) NOT NULL,
  `Java15` int(11) NOT NULL,
  `TotalEL` double(10,1) NOT NULL,
  `Piket` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evidencal`
--

INSERT INTO `evidencal` (`uid_Evidenca`, `uid`, `Java1`, `Java2`, `Java3`, `Java4`, `Java5`, `Java6`, `Java7`, `Java8`, `Java9`, `Java10`, `Java11`, `Java12`, `Java13`, `Java14`, `Java15`, `TotalEL`, `Piket`, `uid_lenda`) VALUES
(17, 155, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(18, 160, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(19, 161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(20, 166, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `evidencau`
--

CREATE TABLE `evidencau` (
  `uid_EvidencaU` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `Java1` int(11) NOT NULL,
  `Java2` int(11) NOT NULL,
  `Java3` int(11) NOT NULL,
  `Java4` int(11) NOT NULL,
  `Java5` int(11) NOT NULL,
  `Java6` int(11) NOT NULL,
  `Java7` int(11) NOT NULL,
  `Java8` int(11) NOT NULL,
  `Java9` int(11) NOT NULL,
  `Java10` int(11) NOT NULL,
  `Java11` int(11) NOT NULL,
  `Java12` int(11) NOT NULL,
  `Java13` int(11) NOT NULL,
  `Java14` int(11) NOT NULL,
  `Java15` int(11) NOT NULL,
  `TotalEU` double(10,1) NOT NULL,
  `Piket` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evidencau`
--

INSERT INTO `evidencau` (`uid_EvidencaU`, `uid`, `Java1`, `Java2`, `Java3`, `Java4`, `Java5`, `Java6`, `Java7`, `Java8`, `Java9`, `Java10`, `Java11`, `Java12`, `Java13`, `Java14`, `Java15`, `TotalEU`, `Piket`, `uid_lenda`) VALUES
(17, 155, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(18, 160, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(19, 161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2),
(20, 166, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `formulat`
--

CREATE TABLE `formulat` (
  `uid_formulat` int(11) NOT NULL,
  `FormulaDetyraV` varchar(50) NOT NULL,
  `F10` varchar(50) NOT NULL,
  `F9` varchar(50) NOT NULL,
  `F8` varchar(50) NOT NULL,
  `F7` varchar(50) NOT NULL,
  `F6` varchar(50) NOT NULL,
  `Provimimeivogel` varchar(50) NOT NULL,
  `FE` varchar(50) NOT NULL,
  `FA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulat`
--

INSERT INTO `formulat` (`uid_formulat`, `FormulaDetyraV`, `F10`, `F9`, `F8`, `F7`, `F6`, `Provimimeivogel`, `FE`, `FA`) VALUES
(1, '/100*25', '91', '81', '71', '61', '51', '20', '/ 15 * 3.5', '/ 15 * 1.5');

-- --------------------------------------------------------

--
-- Table structure for table `ideteprojekteved1`
--

CREATE TABLE `ideteprojekteved1` (
  `uid_IdetEProjekteve` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `TitulliProjektit` varchar(200) NOT NULL,
  `uid_lenda` int(11) NOT NULL,
  `uid_komentet_ideve` int(11) NOT NULL,
  `Koment` varchar(50) NOT NULL,
  `KomentProf` varchar(200) NOT NULL,
  `shfaq` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ideteprojekteved1`
--

INSERT INTO `ideteprojekteved1` (`uid_IdetEProjekteve`, `uid`, `TitulliProjektit`, `uid_lenda`, `uid_komentet_ideve`, `Koment`, `KomentProf`, `shfaq`) VALUES
(17, 155, 'Uebaplikacioni per Menaxhimin e Kafsheve te Humbura (UMKH) ', 2, 1, 'Formati eshte ne rregull! ', '', 1),
(18, 160, 'Uebaplikacioni per e Banesave (UMB)', 2, 2, 'Formati eshte ne rregull!', '', 1),
(19, 161, 'Uebaplikacioni per Menaxhimin e Projekteve me Unno (UMPAU)', 2, 1, 'Formati eshte ne rregull!', '', 1),
(20, 166, '', 2, 1, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentet_ideve`
--

CREATE TABLE `komentet_ideve` (
  `uid_komentet_ideve` int(11) NOT NULL,
  `KomentetEIdeve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentet_ideve`
--

INSERT INTO `komentet_ideve` (`uid_komentet_ideve`, `KomentetEIdeve`) VALUES
(1, 'OK (Ide Unike)'),
(2, 'Ftoheni ne konsultime tek Profesor/i/esha');

-- --------------------------------------------------------

--
-- Table structure for table `lendasist`
--

CREATE TABLE `lendasist` (
  `uid_LA` int(11) NOT NULL,
  `asistenti` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lendasist`
--

INSERT INTO `lendasist` (`uid_LA`, `asistenti`, `uid_lenda`) VALUES
(3, 133, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lendet`
--

CREATE TABLE `lendet` (
  `uid_lenda` int(11) NOT NULL,
  `lenda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lendet`
--

INSERT INTO `lendet` (`uid_lenda`, `lenda`) VALUES
(2, 'ZHWA');

-- --------------------------------------------------------

--
-- Table structure for table `lendprof`
--

CREATE TABLE `lendprof` (
  `uid_LP` int(11) NOT NULL,
  `profesori` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lendprof`
--

INSERT INTO `lendprof` (`uid_LP`, `profesori`, `uid_lenda`) VALUES
(7, 132, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lendstud`
--

CREATE TABLE `lendstud` (
  `uid_LS` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lendstud`
--

INSERT INTO `lendstud` (`uid_LS`, `uid`, `uid_lenda`) VALUES
(17, 155, 2),
(18, 160, 2),
(19, 161, 2),
(20, 166, 2);

-- --------------------------------------------------------

--
-- Table structure for table `listaprezantimeve`
--

CREATE TABLE `listaprezantimeve` (
  `uid_ListaPrezantimeve` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `uid_IdetEProjekteve` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL,
  `detyra1` int(11) NOT NULL,
  `detyra2` int(11) NOT NULL,
  `detyra3` int(11) NOT NULL,
  `detyra4` int(11) NOT NULL,
  `projekti` int(11) NOT NULL,
  `worddok` int(11) NOT NULL,
  `data_prezantimit` datetime NOT NULL,
  `Komenti` varchar(2000) NOT NULL,
  `shfaq` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listaprezantimeve`
--

INSERT INTO `listaprezantimeve` (`uid_ListaPrezantimeve`, `uid`, `uid_IdetEProjekteve`, `uid_lenda`, `detyra1`, `detyra2`, `detyra3`, `detyra4`, `projekti`, `worddok`, `data_prezantimit`, `Komenti`, `shfaq`) VALUES
(17, 155, 17, 2, 1, 2, 1, 1, 1, 1, '0000-00-00 00:00:00', '', 1),
(18, 160, 18, 2, 2, 2, 1, 1, 2, 1, '0000-00-00 00:00:00', '', 1),
(19, 161, 19, 2, 1, 1, 2, 1, 1, 1, '0000-00-00 00:00:00', '', 1),
(20, 166, 20, 2, 1, 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menyt`
--

CREATE TABLE `menyt` (
  `ID_Menyt` int(11) NOT NULL,
  `Menyt` varchar(250) NOT NULL,
  `MenyB` varchar(250) NOT NULL,
  `MenyE` varchar(250) NOT NULL,
  `MenyA` varchar(250) NOT NULL,
  `Idet` varchar(250) NOT NULL,
  `Prezantimet` varchar(250) NOT NULL,
  `Vlersimi` varchar(250) NOT NULL,
  `Konfigurimet` varchar(250) NOT NULL,
  `Ckycu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menyt`
--

INSERT INTO `menyt` (`ID_Menyt`, `Menyt`, `MenyB`, `MenyE`, `MenyA`, `Idet`, `Prezantimet`, `Vlersimi`, `Konfigurimet`, `Ckycu`) VALUES
(1, 'MenytProf', 'Ballina', 'Menaxho Evidencën', 'Menaxho Aktivitetin', 'Shiko Idetë', 'Shiko Listën e Prezentimeve', 'Menaxho Vlerësimin Final', 'Konfigurimet', 'Çkyçu '),
(2, 'MenytAss', 'Ballina', 'Menaxho Evidencën', 'Menaxho Aktivitetin', 'Menaxho Idetë', 'Menaxho Listën e Prezentimeve', 'Shiko Vlerësimin Final', 'Konfigurimet', 'Çkyçu'),
(3, 'MenyStud', 'Ballina', 'Shiko Evidencën', 'Shiko Aktivitetin', 'Shiko Idenë Unike', 'Shiko Listën e Prezentimeve', 'Shiko Vlerësimin Final', 'Konfigurimet', 'Çkyçu'),
(5, 'MenyAdm', 'Ballina', '', '', '', '', '', 'Konfigurimet', 'Çkyçu'),
(6, 'MenyAssB', 'Ballina', ' ', ' ', ' ', ' ', ' ', 'Konfigurimet', 'Çkyçu'),
(7, 'MenyStud', 'Ballina', 'Shiko Evidencën', 'Shiko Aktivitetin', 'Shiko Idenë Unike', 'Shiko Listën e Prezentimeve', 'Shiko Vlerësimin Final', 'Konfigurimet', 'Çkyçu');

-- --------------------------------------------------------

--
-- Table structure for table `studentet`
--

CREATE TABLE `studentet` (
  `uid_student` int(11) NOT NULL,
  `IDStudent` varchar(50) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Emaili` varchar(50) NOT NULL,
  `lenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tedhenat`
--

CREATE TABLE `tedhenat` (
  `uid_TeDhenat` int(11) NOT NULL,
  `titulli` varchar(1000) NOT NULL,
  `pershkrimi` varchar(10000) NOT NULL,
  `file` varchar(255) NOT NULL,
  `pageLayout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tedhenat`
--

INSERT INTO `tedhenat` (`uid_TeDhenat`, `titulli`, `pershkrimi`, `file`, `pageLayout`) VALUES
(3, 'PDVPI', '	<section id=\"sidebar1\" class=\"header\"> 			<div class=\"tlogo\"> 				<div style=\"margin:3% 2%;\" > 				<a  href=\"admin_home.php\"><div class=\"col-12\"><span class=\"image fit\"><img src=\"images/logolin2.png\" alt=\"\"  /></span></div></a> 				</div> 				<div style=\"margin:3% 2%;\"> 					<h2 class=\"tituli\"  ><a  href=\"admin_home.php\" class=\"title\" style=\"color: #ffffff;\">PDVPI </a></h2> 				</div> 			</div> 		</section>', 'images/logolin2.png', 'Header'),
(9, 'Te drejtat e Rezervuara', '&copy; Untitled. Të gjitha të drejtat e rezervuara. Dizajni: <a href=\"http://html5up.net\">HTML5 UP</a><br> Zhvilluar nga: Qendrim Agushi, Erblina Qeli, Eljesa Rashiti', '', 'pageLayout_copyright');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uid_Student` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `ID_usersRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uid_Student`, `username`, `mbiemri`, `email`, `password`, `ID_usersRole`) VALUES
(121, '1000', 'Administrator', 'Admin', 'admin@uni-gjilan.net', '21232f297a57a5a743894a0e4a801fc3', 1),
(132, '1170548716', 'Lindita', 'Nebiu', 'lindita.nebiu@uni-gjilan.net', '1d5bd110f39733e6bf44c78928be6a25', 2),
(133, '1170548715', 'Aferdita', 'Ibrahimi', 'aferdita.ibrahimi@uni-gjilan.net', '1d5bd110f39733e6bf44c78928be6a25', 3),
(155, '19071043', 'Eljesa', 'Rashiti', 'eljesa.rashiti.st@uni-gjilan.net', '1d5bd110f39733e6bf44c78928be6a25', 4),
(160, '19071025', 'Erblina', 'Qeli', 'erblina.qeli.st@uni-gjilan.net', '1d5bd110f39733e6bf44c78928be6a25', 4),
(161, '18071051', 'Qendrim', 'Agushi', 'qendrim.agushi.st@uni-gjilan.net', '1d5bd110f39733e6bf44c78928be6a25', 4),
(166, '12345', 'Dion', 'Islami', 'dion@dion.com', '25d55ad283aa400af464c76d713c07ad', 4);

-- --------------------------------------------------------

--
-- Table structure for table ` users_role`
--

CREATE TABLE ` users_role` (
  `ID_usersRole` int(11) NOT NULL,
  ` usersRole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table ` users_role`
--

INSERT INTO ` users_role` (`ID_usersRole`, ` usersRole`) VALUES
(1, 'Administrator'),
(2, 'Profesor'),
(3, 'Asistent'),
(4, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `vlersimi_final`
--

CREATE TABLE `vlersimi_final` (
  `uid_vlersimiF` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `uid_lenda` int(11) NOT NULL,
  `Detyra1` int(11) NOT NULL,
  `KomnetDetyra1` varchar(2000) NOT NULL,
  `Detyra2` double(10,2) NOT NULL,
  `KomentDetyra2` varchar(2000) NOT NULL,
  `Detyra3` double(10,2) NOT NULL,
  `KomentDetyra3` varchar(2000) NOT NULL,
  `Detyra4` double(10,2) NOT NULL,
  `KomnetDetyra4` varchar(2000) NOT NULL,
  `DorzimiProjektit` double(10,2) NOT NULL,
  `KomentiDorzimiProjekti` varchar(2000) NOT NULL,
  `Prezantimi` double(10,2) NOT NULL,
  `KomentPrezantimi` varchar(2000) NOT NULL,
  `TotalP` double(10,2) NOT NULL,
  `Detyrat` double(10,2) NOT NULL,
  `EvidencaL` int(11) NOT NULL,
  `AktivitetiL` int(11) NOT NULL,
  `EvidencaU` int(11) NOT NULL,
  `AktivitetiU` int(11) NOT NULL,
  `Totali` double(10,2) NOT NULL,
  `Provimi` double(10,2) NOT NULL,
  `TotaliPike` double(10,2) NOT NULL,
  `Nota` int(11) NOT NULL,
  `shfaq` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vlersimi_final`
--

INSERT INTO `vlersimi_final` (`uid_vlersimiF`, `uid`, `uid_lenda`, `Detyra1`, `KomnetDetyra1`, `Detyra2`, `KomentDetyra2`, `Detyra3`, `KomentDetyra3`, `Detyra4`, `KomnetDetyra4`, `DorzimiProjektit`, `KomentiDorzimiProjekti`, `Prezantimi`, `KomentPrezantimi`, `TotalP`, `Detyrat`, `EvidencaL`, `AktivitetiL`, `EvidencaU`, `AktivitetiU`, `Totali`, `Provimi`, `TotaliPike`, `Nota`, `shfaq`) VALUES
(17, 155, 2, 17, '', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, 0.00, 17, 17, 17, 17, 0.00, 0.00, 0.00, 0, 1),
(18, 160, 2, 18, '', 0.00, 'ff', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, 0.00, 18, 18, 18, 18, 0.00, 0.00, 0.00, 5, 1),
(19, 161, 2, 19, '123', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, 0.00, 19, 19, 19, 19, 0.00, 0.00, 0.00, 5, 1),
(20, 166, 2, 20, '', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, '', 0.00, 0.00, 20, 20, 20, 20, 0.00, 0.00, 0.00, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitetil`
--
ALTER TABLE `aktivitetil`
  ADD PRIMARY KEY (`uid_aktivitetil`),
  ADD KEY `uid_lenda` (`uid_lenda`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `aktivitetiu`
--
ALTER TABLE `aktivitetiu`
  ADD PRIMARY KEY (`uid_aktivitetiu`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_lenda` (`uid_lenda`);

--
-- Indexes for table `detyrat`
--
ALTER TABLE `detyrat`
  ADD PRIMARY KEY (`uid_Detyrat`);

--
-- Indexes for table `evidencal`
--
ALTER TABLE `evidencal`
  ADD PRIMARY KEY (`uid_Evidenca`),
  ADD KEY `uid_lenda` (`uid_lenda`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `evidencau`
--
ALTER TABLE `evidencau`
  ADD PRIMARY KEY (`uid_EvidencaU`),
  ADD KEY `uid_lenda` (`uid_lenda`),
  ADD KEY `uidusers` (`uid`);

--
-- Indexes for table `formulat`
--
ALTER TABLE `formulat`
  ADD PRIMARY KEY (`uid_formulat`);

--
-- Indexes for table `ideteprojekteved1`
--
ALTER TABLE `ideteprojekteved1`
  ADD PRIMARY KEY (`uid_IdetEProjekteve`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_lenda` (`uid_lenda`),
  ADD KEY `uid_komentet_ideve` (`uid_komentet_ideve`);

--
-- Indexes for table `komentet_ideve`
--
ALTER TABLE `komentet_ideve`
  ADD PRIMARY KEY (`uid_komentet_ideve`);

--
-- Indexes for table `lendasist`
--
ALTER TABLE `lendasist`
  ADD PRIMARY KEY (`uid_LA`),
  ADD KEY `asistenti` (`asistenti`),
  ADD KEY `lenda` (`uid_lenda`);

--
-- Indexes for table `lendet`
--
ALTER TABLE `lendet`
  ADD PRIMARY KEY (`uid_lenda`);

--
-- Indexes for table `lendprof`
--
ALTER TABLE `lendprof`
  ADD PRIMARY KEY (`uid_LP`),
  ADD KEY `profesori` (`profesori`),
  ADD KEY `lenda` (`uid_lenda`);

--
-- Indexes for table `lendstud`
--
ALTER TABLE `lendstud`
  ADD PRIMARY KEY (`uid_LS`),
  ADD KEY `lenda` (`uid_lenda`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `listaprezantimeve`
--
ALTER TABLE `listaprezantimeve`
  ADD PRIMARY KEY (`uid_ListaPrezantimeve`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_IdetEProjekteve` (`uid_IdetEProjekteve`),
  ADD KEY `uid_lenda` (`uid_lenda`),
  ADD KEY `detyra1` (`detyra1`),
  ADD KEY `detyra2` (`detyra2`),
  ADD KEY `detyra3` (`detyra3`),
  ADD KEY `detyra4` (`detyra4`),
  ADD KEY `detyra4_2` (`detyra4`),
  ADD KEY `detyra4_3` (`detyra4`),
  ADD KEY `worddok` (`worddok`),
  ADD KEY `projekti` (`projekti`);

--
-- Indexes for table `menyt`
--
ALTER TABLE `menyt`
  ADD PRIMARY KEY (`ID_Menyt`);

--
-- Indexes for table `studentet`
--
ALTER TABLE `studentet`
  ADD PRIMARY KEY (`uid_student`),
  ADD KEY `lenda-student` (`lenda`);

--
-- Indexes for table `tedhenat`
--
ALTER TABLE `tedhenat`
  ADD PRIMARY KEY (`uid_TeDhenat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid_Student` (`uid_Student`),
  ADD KEY `test` (`ID_usersRole`);

--
-- Indexes for table ` users_role`
--
ALTER TABLE ` users_role`
  ADD PRIMARY KEY (`ID_usersRole`);

--
-- Indexes for table `vlersimi_final`
--
ALTER TABLE `vlersimi_final`
  ADD PRIMARY KEY (`uid_vlersimiF`),
  ADD KEY `uid` (`uid`),
  ADD KEY `PrezencaL` (`EvidencaL`),
  ADD KEY `AktivitetiL` (`AktivitetiL`),
  ADD KEY `AktivitetiU` (`AktivitetiU`),
  ADD KEY `PrezencaU` (`EvidencaU`),
  ADD KEY `EvidencaU` (`EvidencaU`),
  ADD KEY `Detyra1` (`Detyra1`),
  ADD KEY `uid_lenda` (`uid_lenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitetil`
--
ALTER TABLE `aktivitetil`
  MODIFY `uid_aktivitetil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `aktivitetiu`
--
ALTER TABLE `aktivitetiu`
  MODIFY `uid_aktivitetiu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `detyrat`
--
ALTER TABLE `detyrat`
  MODIFY `uid_Detyrat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evidencal`
--
ALTER TABLE `evidencal`
  MODIFY `uid_Evidenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `evidencau`
--
ALTER TABLE `evidencau`
  MODIFY `uid_EvidencaU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `formulat`
--
ALTER TABLE `formulat`
  MODIFY `uid_formulat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ideteprojekteved1`
--
ALTER TABLE `ideteprojekteved1`
  MODIFY `uid_IdetEProjekteve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komentet_ideve`
--
ALTER TABLE `komentet_ideve`
  MODIFY `uid_komentet_ideve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lendasist`
--
ALTER TABLE `lendasist`
  MODIFY `uid_LA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lendet`
--
ALTER TABLE `lendet`
  MODIFY `uid_lenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lendprof`
--
ALTER TABLE `lendprof`
  MODIFY `uid_LP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lendstud`
--
ALTER TABLE `lendstud`
  MODIFY `uid_LS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `listaprezantimeve`
--
ALTER TABLE `listaprezantimeve`
  MODIFY `uid_ListaPrezantimeve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menyt`
--
ALTER TABLE `menyt`
  MODIFY `ID_Menyt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studentet`
--
ALTER TABLE `studentet`
  MODIFY `uid_student` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tedhenat`
--
ALTER TABLE `tedhenat`
  MODIFY `uid_TeDhenat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table ` users_role`
--
ALTER TABLE ` users_role`
  MODIFY `ID_usersRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vlersimi_final`
--
ALTER TABLE `vlersimi_final`
  MODIFY `uid_vlersimiF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aktivitetil`
--
ALTER TABLE `aktivitetil`
  ADD CONSTRAINT `EmriMbiemri_IDFKAL` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `LendetFKAL` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`);

--
-- Constraints for table `aktivitetiu`
--
ALTER TABLE `aktivitetiu`
  ADD CONSTRAINT `emriEvidencaFK` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `lenda-lendet1` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`);

--
-- Constraints for table `evidencal`
--
ALTER TABLE `evidencal`
  ADD CONSTRAINT `EmriMbiemri_IDFK` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `LendetFK` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`);

--
-- Constraints for table `evidencau`
--
ALTER TABLE `evidencau`
  ADD CONSTRAINT `LendetFKU` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`),
  ADD CONSTRAINT `uidusers` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `ideteprojekteved1`
--
ALTER TABLE `ideteprojekteved1`
  ADD CONSTRAINT `IDEmerMbiemer` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `Lenda` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`),
  ADD CONSTRAINT `komentet` FOREIGN KEY (`uid_komentet_ideve`) REFERENCES `komentet_ideve` (`uid_komentet_ideve`);

--
-- Constraints for table `lendasist`
--
ALTER TABLE `lendasist`
  ADD CONSTRAINT `asistenti-users` FOREIGN KEY (`asistenti`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `lendasist_ibfk_1` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`);

--
-- Constraints for table `lendprof`
--
ALTER TABLE `lendprof`
  ADD CONSTRAINT `lenda-lendet` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`),
  ADD CONSTRAINT `profesori-users` FOREIGN KEY (`profesori`) REFERENCES `users` (`uid`);

--
-- Constraints for table `lendstud`
--
ALTER TABLE `lendstud`
  ADD CONSTRAINT `lendstud_ibfk_1` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`),
  ADD CONSTRAINT `uidlendstud` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `listaprezantimeve`
--
ALTER TABLE `listaprezantimeve`
  ADD CONSTRAINT `Detyra1_prez` FOREIGN KEY (`detyra1`) REFERENCES `detyrat` (`uid_Detyrat`),
  ADD CONSTRAINT `Detyra2_prez` FOREIGN KEY (`detyra2`) REFERENCES `detyrat` (`uid_Detyrat`),
  ADD CONSTRAINT `Detyra3_prez` FOREIGN KEY (`detyra3`) REFERENCES `detyrat` (`uid_Detyrat`),
  ADD CONSTRAINT `Detyra4_prez` FOREIGN KEY (`detyra4`) REFERENCES `detyrat` (`uid_Detyrat`),
  ADD CONSTRAINT `Idet_prez` FOREIGN KEY (`uid_IdetEProjekteve`) REFERENCES `ideteprojekteved1` (`uid_IdetEProjekteve`),
  ADD CONSTRAINT `Lenda_prez` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`),
  ADD CONSTRAINT `Prez_Uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `Projekti_prez` FOREIGN KEY (`projekti`) REFERENCES `detyrat` (`uid_Detyrat`),
  ADD CONSTRAINT `Word_prez` FOREIGN KEY (`worddok`) REFERENCES `detyrat` (`uid_Detyrat`);

--
-- Constraints for table `studentet`
--
ALTER TABLE `studentet`
  ADD CONSTRAINT `lenda-student` FOREIGN KEY (`lenda`) REFERENCES `lendet` (`uid_lenda`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `test` FOREIGN KEY (`ID_usersRole`) REFERENCES ` users_role` (`ID_usersRole`);

--
-- Constraints for table `vlersimi_final`
--
ALTER TABLE `vlersimi_final`
  ADD CONSTRAINT `AktivitetiL` FOREIGN KEY (`AktivitetiL`) REFERENCES `aktivitetil` (`uid_aktivitetil`),
  ADD CONSTRAINT `AktivitetiU` FOREIGN KEY (`AktivitetiU`) REFERENCES `aktivitetiu` (`uid_aktivitetiu`),
  ADD CONSTRAINT `detyra1fk` FOREIGN KEY (`Detyra1`) REFERENCES `ideteprojekteved1` (`uid_IdetEProjekteve`),
  ADD CONSTRAINT `evidencaL` FOREIGN KEY (`EvidencaL`) REFERENCES `evidencal` (`uid_Evidenca`),
  ADD CONSTRAINT `evidencaU` FOREIGN KEY (`EvidencaU`) REFERENCES `evidencau` (`uid_EvidencaU`),
  ADD CONSTRAINT `lendet` FOREIGN KEY (`uid_lenda`) REFERENCES `lendet` (`uid_lenda`),
  ADD CONSTRAINT `student-users` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
