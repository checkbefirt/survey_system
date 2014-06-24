<?php
define("DB_SERVER", "localhost");
define ("DB_USER", "root");
define ("DB_PASSWORD", "spaces");
define("DB_NAME", "survey");
define("TABLE_NAME", "UserDB");


// Connect to server and select databse.
mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD)or die("cannot connect"); 
mysql_select_db(DB_NAME)or die("cannot select DB");

?>