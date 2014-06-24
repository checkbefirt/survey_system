The project is made without any help from any libraries or framework. to not complicate things and to keep my code clear and easy to understand.
The code and the database are made from scratch.
So to run this project, just unzip the code in your server root and acces to index.php

1/the database :
the table questionnaire :

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `q1` tinyint(4) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q3` tinyint(4) NOT NULL,
  `q4` varchar(10) NOT NULL,
  `q5` varchar(10) NOT NULL,
  `q6` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
  FOREIGN KEY (user_id) REFERENCES UserDB(CID)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

2/Optimisation for the table UserDB that you provided
we should first add an Index, this would be useful if we knew that our users were going to be searching for information by username. This will create a table with these properties:

ALTER TABLE table_name ADD INDEX ( column_name );

InnoDB is a high-reliability and high-performance storage engine for MySQL
MEDIUMINT and TINYINT is often a better choice than INT because a MEDIUMINT column uses 25% to 40% less space.
and for our example, SMALLINT is very suitable (65535 possible users in case of unsigned value).
InnoDB tables use a compact storage format
To minimize space even further by storing table data in compressed form, specify ROW_FORMAT=COMPRESSED when creating InnoDB tables.
The primary index of a table should be as short as possible. This makes identification of each row easy and efficient. For InnoDB tables, the primary key columns are duplicated in each secondary index entry, so a short primary key saves considerable space.


a better table with faster responding time and less disk space would be :
CREATE TABLE `UserDB` (
`CID` SMALLINT NOT NULL auto_increment,
`Firstname` varchar(30) NOT NULL default '',
`Lastname` varchar(30) NOT NULL default '',
`Email` varchar(40) NOT NULL default '',
`Password` varchar(30) NOT NULL default '',
PRIMARY KEY (`CID`),
INDEX (Email)
) ENGINE=innodb ROW_FORMAT=COMPRESSED ;

3/security tips for this script:

using "username" and "password" names in forms is no more secured. some crawler and malicious scripts try to find these fields and play around them.
MD5 is no more a secured hashing algorithm, it is already hacked.
the alternative nowadays are the SHAx algorithm. 
SHA1 is no more secured, SHA2 or SHA512 can be a good choice to secure your sql data 
(in php : $hash = hash('SHA512', $pass); )

4/ The user are not allowed to make the syrvey twice
5/ The login form is well verified
6/ the script doesn't allow to access directly to the pages "survey_1.php", "survey_2.php" and "send.php" without beeing loggedin.
in this case an automatic redirection to the main page will be done.
7/ the code is in multilanguage, english file is ready. and you can add as many language as you want in the folder /lang then just add a link to this file. 
Two link are already ready "english" and "french".
