<html>
<head>
<title>process secretary</title>


<link rel="stylesheet" href="franc.css" style="text/css">

</head>
<body>

<table  id="table" align="center">
<tr><td id="content">


	<table >
		<tr><td colspan="4" id="title">Online-voting<br><font size="2"><i>"your trusted enumerator" </i></font></td></tr>
		
		<tr><td colspan="4" id="qstn"><br><BR><BR>
<?php
session_start();
if ((isset($_SESSION['secretary'])))



{
	if ($_SESSION['secretary']='1')
	{
	print "<B>"."You have already voted!"."</b>"."<br>"."<Br>"."<Br>"."<Br>";
	print "<a href='x.php'>"."Vote for Project Coordinator"."</a>"."<Br>"."<Br>"."<Br>";
	
	
	}
}
else
{
  if (isset($_GET['submit1']) && isset($_GET['q']))
  {
  $selected_radio=$_GET['q'];
  $qnum=$_GET['h1'];
  
 $username="admin";
$pass_word="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";
  
  $franc_handle=mysql_connect($server,$username,$pass_word);
  $db_found=mysql_select_db($database,$franc_handle);
  
					  if ($db_found)
					  {
					  $_SESSION['secretary']='1';
					  $SQL="UPDATE answers SET $selected_radio=$selected_radio+1 WHERE QID='$qnum'";
					  $result=mysql_query($SQL);
					  mysql_close($franc_handle);
					  
					  header ('location:x.php');
					
					  
					  }
					  else
					  {
					  print "Error:contact adminstrator";
					  }
  
  
  
  
  }
	else
	{
	
	print "You did not select an option!"."<br>"."<br>"."<br>";
	print "<a href='secretary.php'>"."Vote for treasurer"."</a>";
	
	}


}





?>
</td></tr></table>
</body>
</html>