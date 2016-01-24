-- Users Session Saves
-- -------------------------------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session`(
    `sID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `ipAddr` varchar(50) NOT NULL,
    `occupation` varchar(200) DEFAULT NULL,
    `html` boolean NOT NULL DEFAULT 0,
    `job` varchar(200) DEFAULT NULL,
    `degree` varchar(300) DEFAULT NULL,
    PRIMARY KEY(`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Users Feedback
-- -------------------------------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback`(
    `fID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
    `ipAddr` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `rating` tinyint(3) NULL,
    `feedback` text NULL,
    PRIMARY KEY(`fID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Setup Survey
-- -------------------------------------------------
DROP TABLE IF EXISTS `setupSurvey`;
CREATE TABLE `setupSurvey`(
    `ssID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
    `ipAddr` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `rating` tinyint(3) NULL,
    `feedback` text NULL,
    `framework` varchar(50) NULL,
    PRIMARY KEY(`ssID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Setup Survey
-- -------------------------------------------------
DROP TABLE IF EXISTS `databaseSurvey`;
CREATE TABLE `databaseSurvey`(
    `dbID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
    `ipAddr` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `rating` tinyint(3) NULL,
    `feedback` text NULL,
    `code` text NULL,
    `framework` varchar(50) NULL,
    PRIMARY KEY(`dbID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `routerSurvey`;
CREATE TABLE `routerSurvey`(
    `rID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
    `ipAddr` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `rating` tinyint(3) NULL,
    `feedback` text NULL,
    `framework` varchar(50) NULL,
    PRIMARY KEY(`rID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;