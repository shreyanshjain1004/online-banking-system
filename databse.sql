SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `epiz_28196596_transactions` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epiz_28196596_transactions`;



CREATE TABLE IF NOT EXISTS customers (
    CUSTOMER_ID int(11) NOT NULL AUTO_INCREMENT,
    CUSTOMER_NAME varchar(150) NOT NULL,
    EMAIL varchar(50) NOT NULL,
    MOBILE varchar(10) NOT NULL,
    CURRENT_BALANCE bigint(255) NOT NULL,
    PRIMARY KEY(CUSTOMER_ID)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;


INSERT INTO customers (CUSTOMER_NAME, EMAIL, MOBILE, CURRENT_BALANCE) 
VALUES
("SHREYANSH JAIN", "shreyanshjain@gmail.com", "9857446574", 100000),
("RAVI GUPTA", "gutaravi@gmail.com", "9877564387", 50000),
("PRASHANT SHARMA", "prashant@gmail.com", "7889450092", 20500),
("AKSHIT BORDIYA", "akshit111@gmail.com", "8777564923", 55500),
("RITIK KOTHARI", "ritikriks@gmail.com", "9433789234", 78000),
("AMIT JAIN", "amitjain101@gmail.com", "9988778898", 99000),
("RIYA SHARMA", "riya@gmail.com", "6689450092", 75500),
("GARGI SHARMA", "gargi@gmail.com", "7887630092", 20590),
("KRITIK JAIN", "kritikk@gmail.com", "7889476654", 99999),
("YASHVI GARG", "yashvigarg@gmail.com", "7112450092", 100500); 

CREATE TABLE IF NOT EXISTS transaction(
    SENDER varchar(50),
    RECEIVER varchar(50),
    BALANCE bigint(255)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;
