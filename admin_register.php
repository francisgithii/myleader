
<?php





print "
<head>
<title>Login</title>


<link rel='stylesheet' href='posts.css' style='text/css'>

</head>


<script type = 'text/javascript' >
function validateInp ( elem ) {
var validChars = /[A-Za-z0-9.!#$@%^&*()_]/ ;
var strIn = elem. value;
var strOut = '' ;
for (var i = 0; i <
strIn. length ; i ++ ) {
strOut += (validChars. test
( strIn. charAt (i))) ? strIn. charAt ( i) : '';
}
elem. value = strOut ;
}
</script >";


//register
$memberID="";
$username="";
$password="";
$signupDate='';
$email='';
$phoneNo='';

$message="";


if (isset($_POST['submit1'])){




$username=htmlspecialchars(strtolower(rtrim($_POST['username'])));
$password=htmlspecialchars(strtolower(rtrim($_POST['password'])));












$username="admin";
$pass_word="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";


$franc_handle=mysql_connect($server,$user_name,$pass_word);
$db_found=mysql_select_db($database,$franc_handle);


if ($db_found)
{
		
	$password= mysql_real_escape_string($password, $franc_handle);
	$username= mysql_real_escape_string($username, $franc_handle);
	
		
	
		
$SQL="SELECT * FROM  admins";
$result=mysql_query($SQL);
 $numRows=mysql_num_rows($result);

$posNums = array();
$last=$numRows-1;
for ($i = 0; $i < $numRows; $i++) {
			$row = mysql_fetch_row($result);
			//print $row[0]."<br>";
			
			$pID = $row[0];

			//===================================================================================
			//	STRIP THE 'pos' FROM THE BEGINNING OF THE threadID AND PUT IT INTO THE ARRAY
			//===================================================================================
			
			$posNums[$i] = ltrim($pID, 'mem');
			
		
		}	
	$sort=sort($posNums);
	$lastID = end($posNums);
	// "TTHIS IS THE LAST ID ".$lastID;
	$lastID++;
	
	$memberID = 'mem' . $lastID;
	
	if ($lastID==''){
	
	$memberID ='mem1';
	}
	
	
		
		
$SQL="SELECT * FROM admins WHERE username='$username'";
$result=mysql_query($SQL);
$rows=mysql_num_rows($result);

	
	
					if ($rows>0)
					{
					$message="Username already exists"."-"."<a href='login.php'>"."login here"."</a>"."<br>"."<br>"."<br>";
					

					}
					else if(($username && $password)=='')
					{
					
					$message="invalid entry"."<br>"."<br>";
					}
					else
					{
						
								
								print $SQL="INSERT INTO admins (memberID,username,password) values('$memberID','$username',md5('$password'))";
								mysql_query($SQL);
								
								$message="good";
								
							//header ("location:login.php");
						
					}
				
}
else
{


}

}

?>

<table align=center width=600 >


<?php
$tableHeaders1 = "<TR WIDTH = 200 height = 90 align = center valign = center bgcolor =#00CCEB>";
	print $tableHeaders1 = $tableHeaders1 . "<TD colspan=3 id=title><img id='imagehead'  ><i><p><h5>&quot;Admin registers&quot</h5></p></i></TD></TR>";
?>

<tr background=background_forums2.jpg><td><font face=verdana color=#333333>
<h1 align="center" >REGISTER</h1>
<form name="form1" method="POST" action="admin_register.php">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


Username :<input type="text" name="username" maxlength="40" value="<?php print $username; ?>" ><BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


password:<input type="password" name="password" maxlength="40" value="<?php print $password; ?>" ><BR><BR>





<?php print "<font color='red'>".$message."</font>"

;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="submit" name="submit1" id="submit" value="Submit">
</form>


</font></td></tr>
</body>


