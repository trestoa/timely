CREATE TABLE IF NOT EXISTS `calender_user` (
	`ID` int(10) NOT NULL AUTO_INCREMENT,
	`email` varchar(100) NOT NULL,
	`username` varchar(30) NOT NULL,
	`password` varchar(40) NOT NULL,
	PRIMARY KEY(`ID`)
);