<?php
/*
$mysql_db_hostname = "sql308.byethost33.com";
$mysql_db_user = "b33_15949534";
$mysql_db_password = "2012506008";
$mysql_db_database = "b33_15949534_codes";
*/
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "samhita";
$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");
?>