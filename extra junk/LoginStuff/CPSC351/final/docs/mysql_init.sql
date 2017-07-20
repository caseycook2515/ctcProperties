CREATE TABLE `cook`.`pmmPerson` ( 
	`PersonId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`FName` VARCHAR(255),
	`LName` VARCHAR(255),
	`Email` VARCHAR(255),
	`Phone` VARCHAR(255),
	`PassHash` VARCHAR(40),
	`Salt` VARCHAR(10),
	PRIMARY KEY (`PersonId`)) ENGINE = InnoDB;

CREATE TABLE `cook`.`pmmDates` ( 
	`DateId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`Date` VARCHAR(255),
	`Available` VARCHAR(255),
	`CompanyId` VARCHAR(255),
	PRIMARY KEY (`DateId`)) ENGINE = InnoDB;
	
CREATE TABLE `cook`.`pmmCompany` ( 
	`CompanyId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`CompanyName` VARCHAR(255),
	`CompanyType` VARCHAR(255),
	`dateId` VARCHAR(255),
	PRIMARY KEY (`CompanyId`)) ENGINE = InnoDB;

