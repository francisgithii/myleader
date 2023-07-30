<?php
//register



$username="admin";
$password="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";


$franc_handle=mysql_connect($server,$username,$password);
$db_found=mysql_select_db($database,$franc_handle);

if ($db_found)
{
$SQL="
CREATE TABLE Register
(
ID int(7) NOT NULL auto_increment,
First_Name VARCHAR(50) NOT NULL,
Second_Name VARCHAR(50) NOT NULL,
Registration_Number VARCHAR(50) NOT NULL,
Password VARCHAR(20) NOT NULL,

UNIQUE id (ID)


)";

mysql_query($SQL);
}


else
{
print "database not found";
}



?>