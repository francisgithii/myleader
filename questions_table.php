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
$SQL="CREATE TABLE questions
(
QID varchar(10),
Question VARCHAR (60),
qA VARCHAR(25),
qB VARCHAR(25),
qC VARCHAR(25)





)";


mysql_query($SQL);


}
else
{
print "database not found";
}

?>