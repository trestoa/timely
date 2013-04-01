CREATE TABLE IF NOT EXISTS 'calender_appointment' (
	'user_ID' int(10) NOT NULL;
	'dp_date' date NOT NULL default '0000-00-00',
	'content' varchar(200) NOT NULL,
);