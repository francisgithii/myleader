<html>
<head>
<title>Asst Sec Gen</title>


<script type="text/javascript">
function validate()
{
var answer=confirm("Are you sure you want to Log Out");

if (answer==true)
window.location="login.php";
}
</script>


<link rel="stylesheet" href="franc.css" style="text/css">

</head>
<body>

<table  id="table" align="center">
<tr><td id="content">


<table >
			<tr><td colspan="7" id="title">TSA Elections 2016<br><font size="2"><i>"your trusted enumerator" </i></font></td></tr>
		<tr id="linkbar"><td >Chairperson</td><td>Sec General</a></td><td>Treasurer </a></td><td>Project Coordinator </a></td><td>Asst P.Coordinator </a></td><td background="bg1.jpg">Asst Sec Gen </a></td><td>Constitution </a></td></tr>
		<tr><td colspan="7" id="qstn"><br>

<?php

session_start();
if (!(isset($_SESSION['gatepass_z']) && $_SESSION['gatepass_z'] != '')) {
	header ("Location: login.php");
}


$voter=$_SESSION['votername'];

$qnum='q6';

$selected_radio="";
$qID="";
$question="question not set";
$answerA="unchecked";
$answerB="unchecked";
$answerC="unchecked";


$username="admin";
$pass_word="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";

$franc_handle=mysql_connect($server,$username,$pass_word);
$db_found=mysql_select_db($database,$franc_handle);



if ($db_found)
{
$SQL="SELECT * FROM questions WHERE questions.QID='$qnum'";
$result=mysql_query($SQL);
$db_field=mysql_fetch_assoc($result);

$qID=$db_field['QID'];
$question=$db_field['Question'];
$qA=$db_field['qA'];
$qB=$db_field['qB'];
$qC=$db_field['qC'];

$SQL2="SELECT First_Name FROM register WHERE Registration_Number='$voter'";
$result2=mysql_query($SQL2);

while($db_field=mysql_fetch_assoc($result2))
			{
			
			$firstname=$db_field['First_Name'] . " ";
			
}

mysql_close($franc_handle);
}
else
{

$message="error accessing database";
mysql_close($franc_handle);

}
print "<b>"."Name:"."</b>".$firstname;
print "<b>"."ADMNO: "."</b>".$voter."<br>"."<br>";
?>


<form name="form1" method="GET" action="process_z.php">
<?php print "<b>"."<font size='5' color='#FF0000'>".$question."</font>"."</b>"; ?>
<br><br>
<table><tr><td valign='top'>
<img src="profile/SHARON ADHIAMBO.jpg" width="150" height="170" align="center" class="pic">
<br><br>
<input class="radiob" type="radio" name="q" value="A" <?PHP print $answerA?>><?PHP print $qA?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<td valign='top'>
<img src="profile/ONDARI HESBON.jpg" width="150" height="170" align="center" class="pic">
<br><br>
<input class="radiob" type="radio" name="q" value="B" <?PHP print $answerB?>><?PHP print $qB?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<td valign='top'>
<img src="profile/WASI KEVIN SHITOTE.jpg" width="150" height="170" align="center" class="pic">
<br><br>
<input class="radiob" type="radio" name="q" value="C" <?PHP print $answerC?>><?PHP print $qC?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



</td></tr>
<tr><td colspan='3' valign='top'>
<input type="hidden" name="h1" VALUE = <?PHP print $qID; ?>><Br><BR>
<INPUT TYPE = "Submit" Name = "submit1"  id="submit" VALUE = "Vote">
</FORM>

</td></tr></table>

<?php
//view results portion left out
?>
</td></tr>
				</table>
</td></tr></table>
</body>