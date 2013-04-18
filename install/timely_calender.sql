CREATE TABLE IF NOT EXISTS `timely_calender` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`owner_id` int(10) NOT NULL,
	`name` varchar(100) NOT NULL,
	`public` int(1) NOT NULL default 0,
	PRIMARY KEY(`id`)
);