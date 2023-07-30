<html><head>
<title>Results Chairman</title>

<link rel="stylesheet" href="results.css" style="text/css">


<script type="text/javascript">
var timer = null;
function auto_reload ()
{
window .location = 'http://www.francis.com/myleader/results_chairman.php' ;
}
<!-- Reload page every 10 seconds. -->
</script>

</head>



<body id="results" onload=" timer =setTimeout('auto_reload()',3000); "></pre></p>

<?php

$message="";



$answerA_chairman = '';
$answerA_vicechairman = '';
$answerA_Secretary = '';
$answerA_x = '';
$answerA_y= '';
$answerA_z = '';
$answerA_const= '';

$answerB_chairman = '';
$answerB_vicechairman = '';
$answerB_Secretary = '';
$answerB_x = '';
$answerB_y = '';
$answerB_z= '';
$answerB_const = '';


$answerC_chairman = '';
$answerC_vicechairman = '';
$answerC_Secretary = '';
$answerC_x = '';
$answerC_y = '';
$answerC_z = '';
$answerC_const = '';











$qA_chairman = '';
$qA_vicechairman = '';
$qA_secretary = '';
$qA_x = '';
$qA_y = '';
$qA_z = '';
$qA_const = '';


$qB_chairman = '';
$qB_vicechairman = '';
$qB_secretary = '';
$qB_x = '';
$qB_y = '';
$qB_z = '';
$qB_const = '';


$qC_chairman = '';
$qC_vicechairman = '';
$qC_secretary = '';
$qC_x = '';
$qC_y = '';
$qC_z = '';
$qC_const = '';



















$totalvotes_chairman='';
$totalvotes_vicechairman='';
$totalvotes_secretary='';
$totalvotes_x='';
$totalvotes_y='';
$totalvotes_z='';
$totalvotes_const='';






$percentA_chairman='';
$percentA_vicechairman='';
$percentA_secretary='';
$percentA_x='';
$percentA_y='';
$percentA_z='';
$percentA_const='';

$percentB_chairman='';
$percentB_vicechairman='';
$percentB_secretary='';
$percentB_x='';
$percentB_y='';
$percentB_z='';
$percentB_const='';

$percentC_chairman='';
$percentC_vicechairman='';
$percentC_secretary='';
$percentC_x='';
$percentC_y='';
$percentC_z='';
$percentC_const='';














$imgwidthA_chairman='';
$imgwidthA_vicechairman='';
$imgwidthA_secretary='';
$imgwidthA_x='';
$imgwidthA_y='';
$imgwidthA_z='';
$imgwidthA_const='';


$imgwidthB_chairman='';
$imgwidthB_vicechairman='';
$imgwidthB_secretary='';
$imgwidthB_x='';
$imgwidthB_y='';
$imgwidthA_z='';
$imgwidthA_const='';

$imgwidthC_chairman='';
$imgwidthC_vicechairman='';
$imgwidthC_secretary='';
$imgwidthC_x='';
$imgwidthC_y='';
$imgwidthC_z='';
$imgwidthC_const='';













$imgtagA_chairman='';
$imgtagA_vicechairman='';
$imgtagA_secretary='';
$imgtagA_x='';
$imgtagA_y='';
$imgtagA_z='';
$imgtagA_const='';


$imgwidthC_z='';
$imgwidthC_const='';

$imgtagB_chairman='';
$imgtagB_vicechairman='';
$imgtagB_secretary='';
$imgtagB_x='';
$imgtagB_y='';
$imgtagB_z='';
$imgtagB_const='';

$imgtagC_chairman='';
$imgtagC_vicechairman='';
$imgtagC_secretary='';
$imgtagC_x='';
$imgtagC_y='';
$imgtagC_z='';
$imgtagC_const='';















$imgheight='30';

$username="admin";
$pass_word="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";

$franc_handle=mysql_connect($server,$username,$pass_word);
$db_found=mysql_select_db($database,$franc_handle);



if ($db_found)
{

//project coordinator
$SQL_x = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q4'";
			$result = mysql_query($SQL_x);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_x = $db_field['A'];
			$answerB_x = $db_field['B'];
			$answerC_x= $db_field['C'];
			

			$qA_x = $db_field['qA'];
			$qB_x= $db_field['qB'];
			$qC_x= $db_field['qC'];
			
			
	$totalvotes_x=$answerA_x+$answerB_x+$answerC_x;

	if ($totalvotes_x==0){
									$message="NO VOTE CAST";
									}
	else{
									$percentA_x = (($answerA_x * 100) / $totalvotes_x);
									$percentA_x= round($percentA_x,2,PHP_ROUND_HALF_UP);
									
									$percentB_x = (($answerB_x * 100) / $totalvotes_x);
									$percentB_x= round($percentB_x,2,PHP_ROUND_HALF_UP);
									
									$percentC_x = (($answerC_x * 100) / $totalvotes_x);
									$percentC_x= round($percentC_x,2,PHP_ROUND_HALF_UP);
									
									
									
	}
	$imgwidthA_x=$percentA_x*3;
	$imgwidthB_x=$percentB_x*3;
	$imgwidthC_x=$percentC_x*3;
	
	
	
			$imgtagA_x = "<IMG SRC = 'purple.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_x. ">";
			$imgtagB_x= "<IMG SRC = 'purple.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_x . ">";
			$imgtagC_x= "<IMG SRC = 'purple.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_x . ">";
			
	
	
	
//Asst project coordinator
$SQL_y = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q5'";
			$result = mysql_query($SQL_y);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_y = $db_field['A'];
			$answerB_y = $db_field['B'];
			$answerC_y= $db_field['C'];
			

			$qA_y = $db_field['qA'];
			$qB_y= $db_field['qB'];
			$qC_y= $db_field['qC'];
			
			
			
	$totalvotes_y=$answerA_y+$answerB_y+$answerC_y;

	if ($totalvotes_y==0){
									$message="NO VOTE CAST";
									}
	else{
									$percentA_y = (($answerA_y * 100) / $totalvotes_y);
									$percentA_y= round($percentA_y,2,PHP_ROUND_HALF_UP);
									
									$percentB_y = (($answerB_y * 100) / $totalvotes_y);
									$percentB_y= round($percentB_y,2,PHP_ROUND_HALF_UP);
									
									$percentC_y = (($answerC_y * 100) / $totalvotes_y);
									$percentC_y= round($percentC_y,2,PHP_ROUND_HALF_UP);
									

	}
	$imgwidthA_y=$percentA_y*3;
	$imgwidthB_y=$percentB_y*3;
	$imgwidthC_y=$percentC_y*3;
	
	
	
			$imgtagA_y = "<IMG SRC = 'black.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_y. ">";
			$imgtagB_y= "<IMG SRC = 'black.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_y . ">";
			$imgtagC_y= "<IMG SRC = 'black.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_y . ">";
			

//chairperson
$SQL_CHAIRMAN = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q1'";
			$result = mysql_query($SQL_CHAIRMAN);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_chairman = $db_field['A'];
			$answerB_chairman = $db_field['B'];
			$answerC_chairman = $db_field['C'];
			

			$qA_chairman = $db_field['qA'];
			$qB_chairman = $db_field['qB'];
			$qC_chairman = $db_field['qC'];
			
			
	$totalvotes_chairman=$answerA_chairman+$answerB_chairman+$answerC_chairman;
	if ($totalvotes_chairman==0){
							$message="NO VOTE CAST";
							}
	else{
							$percentA_chairman = (($answerA_chairman * 100) / $totalvotes_chairman);
							$percentA_chairman= round($percentA_chairman,2,PHP_ROUND_HALF_UP);
							
							
							
							$percentB_chairman = (($answerB_chairman * 100) / $totalvotes_chairman);
							$percentB_chairman= round($percentB_chairman,2,PHP_ROUND_HALF_UP);
							
							$percentC_chairman = (($answerC_chairman * 100) / $totalvotes_chairman);
							$percentC_chairman= round($percentC_chairman,2,PHP_ROUND_HALF_UP);
	
	
							
	
	}
	
	$imgwidthA_chairman=$percentA_chairman*3;
	$imgwidthB_chairman=$percentB_chairman*3;
	$imgwidthC_chairman=$percentC_chairman*3;
	
	
	
			$imgtagA_chairman = "<IMG SRC = 'red.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_chairman. ">";
			$imgtagB_chairman= "<IMG SRC = 'red.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_chairman . ">";
			$imgtagC_chairman= "<IMG SRC = 'red.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_chairman . ">";
		
	
	
	
	//sec gen
$SQL_VICECHAIRMAN = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q2'";
			$result = mysql_query($SQL_VICECHAIRMAN);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_vicechairman = $db_field['A'];
			$answerB_vicechairman = $db_field['B'];
			$answerC_vicechairman= $db_field['C'];
			

			$qA_vicechairman = $db_field['qA'];
			$qB_vicechairman= $db_field['qB'];
			$qC_vicechairman= $db_field['qC'];
			
			
	$totalvotes_vicechairman=$answerA_vicechairman+$answerB_vicechairman+$answerC_vicechairman;

	if ($totalvotes_vicechairman==0){
									$message="NO VOTE CAST";
									}
	else{
									$percentA_vicechairman = (($answerA_vicechairman * 100) / $totalvotes_vicechairman);
									$percentA_vicechairman= round($percentA_vicechairman,2,PHP_ROUND_HALF_UP);
									
									$percentB_vicechairman = (($answerB_vicechairman * 100) / $totalvotes_vicechairman);
									$percentB_vicechairman= round($percentB_vicechairman,2,PHP_ROUND_HALF_UP);
									
									$percentC_vicechairman = (($answerC_vicechairman * 100) / $totalvotes_vicechairman);
									$percentC_vicechairman= round($percentC_vicechairman,2,PHP_ROUND_HALF_UP);
									
									
	}
	$imgwidthA_vicechairman=$percentA_vicechairman*3;
	$imgwidthB_vicechairman=$percentB_vicechairman*3;
	$imgwidthC_vicechairman=$percentC_vicechairman*3;
	
	
			$imgtagA_vicechairman = "<IMG SRC = 'blue.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_vicechairman. ">";
			$imgtagB_vicechairman= "<IMG SRC = 'blue.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_vicechairman . ">";
			$imgtagC_vicechairman= "<IMG SRC = 'blue.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_vicechairman . ">";
			
	//treasurer
$SQL_SECRETARY= "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q3'";
			$result = mysql_query($SQL_SECRETARY);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_secretary = $db_field['A'];
			$answerB_secretary = $db_field['B'];
			$answerC_secretary = $db_field['C'];
			

			$qA_secretary = $db_field['qA'];
			$qB_secretary = $db_field['qB'];
			$qC_secretary = $db_field['qC'];
			
			
	$totalvotes_secretary=$answerA_secretary+$answerB_secretary+$answerC_secretary;
		if ($totalvotes_secretary==0){
										
										$message="NO <br>votes CAST";
		}
		else{
										$percentA_secretary = (($answerA_secretary * 100) / $totalvotes_secretary);
										$percentA_secretary= round($percentA_secretary,2,PHP_ROUND_HALF_UP);
										
										$percentB_secretary = (($answerB_secretary * 100) / $totalvotes_secretary);
										$percentB_secretary= round($percentB_secretary,2,PHP_ROUND_HALF_UP);
										
										$percentC_secretary = (($answerC_secretary * 100) / $totalvotes_secretary);
										$percentC_secretary= round($percentC_secretary,2,PHP_ROUND_HALF_UP);
										
										
			}
			$imgwidthA_secretary=$percentA_secretary*3;
			$imgwidthB_secretary=$percentB_secretary*3;
			$imgwidthC_secretary=$percentC_secretary*3;
			
			
			$imgtagA_secretary = "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_secretary. ">";
			$imgtagB_secretary= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_secretary . ">";
			$imgtagC_secretary= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_secretary . ">";
		

/*
//asst sec gen
$SQL_SECRETARY = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q6'";
			$result = mysql_query($SQL_SECRETARY);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_secretary = $db_field['A'];
			$answerB_secretary = $db_field['B'];
			$answerC_secretary = $db_field['C'];
			

			$qA_z = $db_field['qA'];
			$qB_z = $db_field['qB'];
			$qC_z = $db_field['qC'];
			
			
	$totalvotes_secretary=$answerA_secretary+$answerB_secretary+$answerC_secretary;
		if ($totalvotes_secretary==0){
										
										$message="NO <br>votes CAST";
		}
		else{
										$percentA_secretary = (($answerA_secretary * 100) / $totalvotes_secretary);
										$percentA_secretary= round($percentA_secretary,2,PHP_ROUND_HALF_UP);
										
										$percentB_secretary = (($answerB_secretary * 100) / $totalvotes_secretary);
										$percentB_secretary= round($percentB_secretary,2,PHP_ROUND_HALF_UP);
										
										$percentC_secretary = (($answerC_secretary * 100) / $totalvotes_secretary);
										$percentC_secretary= round($percentC_secretary,2,PHP_ROUND_HALF_UP);
										
										
			}
			$imgwidthA_secretary=$percentA_secretary*3;
			$imgwidthB_secretary=$percentB_secretary*3;
			$imgwidthC_secretary=$percentC_secretary*3;
			
			
			$imgtagA_secretary = "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_secretary. ">";
			$imgtagB_secretary= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_secretary . ">";
			$imgtagC_secretary= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_secretary . ">";		
			
			
			
			//constitution
			
$SQL_SECRETARY = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q7'";
			$result = mysql_query($SQL_SECRETARY);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_secretary = $db_field['A'];
			$answerB_secretary = $db_field['B'];
			$answerC_secretary = $db_field['C'];
			

			$qA_const = $db_field['qA'];
			$qB_const = $db_field['qB'];
			$qC_const = $db_field['qC'];
			
			
	$totalvotes_secretary=$answerA_secretary+$answerB_secretary+$answerC_secretary;
		if ($totalvotes_secretary==0){
										
										$message="NO <br>votes CAST";
		}
		else{
										$percentA_secretary = (($answerA_secretary * 100) / $totalvotes_secretary);
										$percentA_secretary= round($percentA_secretary,2,PHP_ROUND_HALF_UP);
										
										$percentB_secretary = (($answerB_secretary * 100) / $totalvotes_secretary);
										$percentB_secretary= round($percentB_secretary,2,PHP_ROUND_HALF_UP);
										
										$percentC_secretary = (($answerC_secretary * 100) / $totalvotes_secretary);
										$percentC_secretary= round($percentC_secretary,2,PHP_ROUND_HALF_UP);
										
										
			}
			$imgwidthA_secretary=$percentA_secretary*3;
			$imgwidthB_secretary=$percentB_secretary*3;
			$imgwidthC_secretary=$percentC_secretary*3;
			
			
			$imgtagA_secretary = "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_secretary. ">";
			$imgtagB_secretary= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_secretary . ">";
			$imgtagC_secretary= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_secretary . ">";		

			*/
			}
else
{
$message="database not found";
}


?>






<table  align="center" background="bg_grad_grey.jpg"  class="resultstable">


<tr><Td height="100" width='1300' colspan="5" valign='bottom'id='head'><h2>

<h3 align="center">MOI UNIVERSITY<BR>TSA ELECTIONS 2016</H3><br>
<?php

$today=date("H:i:s");

$leo=date('l jS F Y');
print "<p align='left'>"."Election date: ".$leo;
print "<br>";

print "<p align='left'>"."Current Time: ".$today;
print "<br>"."<br>";
//print "Election end : 22:00";
print "<br>"."<br>";



?>


</h2></td></tr>


<?php





print "<td align='left' valign='top' id='content'>";
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."Chairperson"."</font>"."</b>"."<br><br>";
print "<b>".$qA_chairman."</b>"."<br>"." ".$imgtagA_chairman." ".$percentA_chairman. "% "."   "."<br>votes"." ".$answerA_chairman."<br>"."<br>";
print "<b>".$qB_chairman."</b>"."<br>"." ".$imgtagB_chairman." ".$percentB_chairman. "% "."   "."<br>votes"." ".$answerB_chairman."<br>"."<br>";
//print "<b>".$qC_chairman."</b>"."<br>"." ".$imgtagC_chairman." ".$percentC_chairman. "% "."   "."<br>votes"." ".$answerC_chairman."<br>"."<br>";


print "<br>votes cast:"." ".$totalvotes_chairman."<br>"."<br>"."<br>";


/*
if($hour>=22){
print $winner_chairman;

}
*/
/*

print "<td align='left' valign='top' id='content'>";
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."Sec General"."</font>"."</b>"."<br>";
print "<b>".$qA_vicechairman."</b>"."<br>"." ".$imgtagA_vicechairman." ".$percentA_vicechairman. "% "."   "."<br>votes"." ".$answerA_vicechairman."<br>"."<br>";
print "<b>".$qB_vicechairman."</b>"."<br>"." ".$imgtagB_vicechairman." ".$percentB_vicechairman. "% "."   "."<br>votes"." ".$answerB_vicechairman."<br>"."<br>";
print "<b>".$qC_vicechairman."</b>"."<br>"." ".$imgtagC_vicechairman." ".$percentC_vicechairman. "% "."   "."<br>votes"." ".$answerC_vicechairman."<br>"."<br>";


print "<br>votes cast:"." ".$totalvotes_vicechairman."<br>"."<br>"."<br>";

/*
if($hour>=22){
print $winner_vicechairman;
}
*/
/*
print "<td align='left' valign='top' id='content'>";
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."Treasurer"."</font>"."</b>"."<br>";
print "<b>".$qA_secretary."</b>"."<br>"." ".$imgtagA_secretary." ".$percentA_secretary. "% "."   "."<br>votes"." ".$answerA_secretary."<br>"."<br>";
print "<b>".$qB_secretary."</b>"."<br>"." ".$imgtagB_secretary." ".$percentB_secretary. "% "."   "."<br>votes"." ".$answerB_secretary."<br>"."<br>";
print "<b>".$qC_secretary."</b>"."<br>"." ".$imgtagC_secretary." ".$percentC_secretary. "% "."   "."<br>votes"." ".$answerC_secretary."<br>"."<br>";



print "<br>votes cast:"." ".$totalvotes_secretary."<br>"."<br>"."<br>";

/*
if($hour>=22){
print $winner_secretary;
}
*/

/*
print "<td align='left' valign='top' id='content'>";
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."project Coordinator"."</font>"."</b>"."<br>";
print "<b>".$qA_x."</b>"."<br>"." ".$imgtagA_x." ".$percentA_x. "% "."   "."<br>votes"." ".$answerA_x."<br>"."<br>";
print "<b>".$qB_x."</b>"."<br>"." ".$imgtagB_x." ".$percentB_x. "% "."   "."<br>votes"." ".$answerB_x."<br>"."<br>";
print "<b>".$qC_x."</b>"."<br>"." ".$imgtagC_x." ".$percentC_x. "% "."   "."<br>votes"." ".$answerC_x."<br>"."<br>";



print "<br>votes cast:"." ".$totalvotes_x."<br>"."<br>"."<br>";


/*
if($hour>=22){
print $winner_x;

}

*/




/*
if($hour>=22){
print $winner_y;

}

*/
print "</td>"."</tr>";




?>
</table>
</body>