CREATE TABLE `pnu_contest`.`tblusers` (
  `id` INT NOT NULL,
  `name` VARCHAR(32) NOT NULL,
  `username` VARCHAR(32) NOT NULL,
  `password` VARCHAR(33) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `verified` BLOB NULL DEFAULT false,
  `verificationcode` INT NOT NULL,
  `photo` TEXT NULL,
  `birthday` DATE NULL,
  `lastlogintime` DATETIME NULL,
  `registertime` DATETIME NOT NULL,
  `bio` TEXT NULL,
  `score` INT NULL DEFAULT 0,
  `theme` INT NULL DEFAULT 0,
  `languages` TEXT NULL,
  `namechangecount` INT NULL DEFAULT 0,
  `privacy` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));
  
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