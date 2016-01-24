<div class="sqlEditor syntaxHighlight smallBox">
-- First we have to create a database
CREATE DATABASE IF NOT EXISTS `companyName`;

-- Then we need to create a table
CREATE TABLE `Employee`(
    `employeeID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
    `birthDay` date NOT NULL,
    `firstName` varchar(50) NOT NULL,
    `lastName` varchar(50) NOT NULL,
    `gender` varchar(200) DEFAULT NULL,
    `hireDate` date NOT NULL,
    `salary` varchar(300) DEFAULT NULL,
    PRIMARY KEY(`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
</div>
