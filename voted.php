<?php
$username="admin";
$pass_word="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";
  $regnumber=$_POST['regnum'];
  
  $franc_handle=mysql_connect($server,$username,$pass_word);
  $db_found=mysql_select_db($database,$franc_handle);
  
  if  ($db_found)
  {
  
  $SQL="UPDATE register SET Password='VOTED' WHERE Registration_Number='$regnum'";
					  $result=mysql_query($SQL);
					  mysql_close($franc_handle);
  
  
  
  }

























?>