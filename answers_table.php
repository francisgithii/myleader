<?php

// create a table of questions and answers

$username="admin";
$password="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";


$franc_handle=mysql_connect($server,$username,$password);
$db_found=mysql_select_db($database,$franc_handle);

if ($db_found)
{
$SQL="CREATE TABLE answers
(
ID int(10) auto_increment,
QID varchar(10),

A VARCHAR(25),
B VARCHAR(25),
C VARCHAR(25),
unique id(id)




)";
mysql_query($SQL);
print "ANSWERS TABLE CREATED";

mysql_close($franc_handle);

}
else
{
print "database not found";
}

?>