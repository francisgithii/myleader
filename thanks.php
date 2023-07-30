<?php
session_start();
if (!(isset($_SESSION['gatepass_chairman']) && $_SESSION['gatepass_chairman'] != '')) {
	header ("Location: login.php");
}



?>

<html>
<head>
<title>Thanks</title>
<script type="text/javascript">
function franci()
{


document.location.href="login.php";
  }


</script>


<link rel="stylesheet" href="franc.css" style="text/css">

</head>
<body>

<table  id="table" align="center">
<tr><td id="content">


	<table >
		<tr><td colspan="4" id="title">TSA Elections 2016<br><font size="2"><i>"your trusted enumerator" </i></font></td></tr>
		
		<tr><td colspan="4" valign='top'>
	
	
	<p> <br><br><br><br><br>Thanks for voting ! Kindly log out</p>
	<!--<p><a href='login.php'><font size=10>Log out</font></a></p> -->
	<input type='button' value="Log Out" onclick='franci()'> 
	</td></tr>
	</table>