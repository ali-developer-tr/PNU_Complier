CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) COLLATE utf8_persian_ci DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `username` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(33) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `verified` blob,
  `verificationcode` int(11) NOT NULL,
  `photo` text COLLATE utf8_persian_ci,
  `birthday` date DEFAULT NULL,
  `lastlogintime` datetime DEFAULT NULL,
  `registertime` datetime NOT NULL,
  `bio` text COLLATE utf8_persian_ci,
  `score` int(11) DEFAULT '0',
  `theme` int(11) DEFAULT '0',
  `languages` text COLLATE utf8_persian_ci,
  `namechangecount` int(11) DEFAULT '0',
  `privacy` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


  CREATE TABLE `pnu_contest`.`tblfriends` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userid` INT NOT NULL,
  `friendid` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `friendid_UNIQUE` (`friendid` ASC));
  
  CREATE TABLE `pnu_contest`.`tblmembers` (
  `id` INT NOT NULL,
  `groupid` INT NULL,
  `memberid` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `groupid_UNIQUE` (`groupid` ASC));
  
  CREATE TABLE `pnu_contest`.`tblproblems` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `level` INT NOT NULL,
  `code` INT NOT NULL,
  `description` TEXT NOT NULL,
  `ownerid` INT NOT NULL,
  `groupid` INT NOT NULL,
  `creationtime` DATETIME NOT NULL,
  `maxtime` INT NOT NULL,
  `maxmemory` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `code_UNIQUE` (`code` ASC));
  
  CREATE TABLE `pnu_contest`.`tblcontests` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `description` TEXT NULL,
  `starttime` DATETIME NULL,
  `endtime` DATETIME NULL,
  `ownerid` INT NOT NULL,
  `groupid` INT NULL,
  `creationtime` DATETIME NULL,
  `level` INT NULL,
  `minscore` INT NULL,
  `maxscore` INT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `pnu_contest`.`tbltestcases` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `problemid` INT NOT NULL,
  `infile` TEXT NULL,
  `outfile` TEXT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `pnu_contest`.`tblsubmissions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userid` INT NOT NULL,
  `problemid` INT NOT NULL,
  `srccode` TEXT NOT NULL,
  `result` INT NOT NULL,
  `submissiontime` DATETIME NOT NULL,
  `executiontime` INT NULL,
  `memoryusage` INT NULL,
  `programminglanguage` VARCHAR(45) NULL,
  `resulttext` TEXT NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `pnu_contest`.`tblmessages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fromuserid` INT NOT NULL,
  `touserid` INT NOT NULL,
  `messagetitle` VARCHAR(255) NULL,
  `messagebody` TEXT NOT NULL,
  `sendtime` DATETIME NULL,
  `isread` BLOB NULL,
  `trashed` BLOB NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `pnu_contest`.`tblmsgtrash` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `messageid` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `messageid_UNIQUE` (`messageid` ASC));