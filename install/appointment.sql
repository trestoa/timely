CREATE TABLE IF NOT EXISTS `timely_appointment` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`user_id` int(10) NOT NULL,
	`date_day` int(1) NOT NULL default 0,
	`date_month` int(1) NOT NULL default 0,
	`date_year` year NOT NULL default '0000',
	`content` varchar(200) NOT NULL,
	PRIMARY KEY(`ID`)
);