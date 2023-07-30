<html><head>
<title>Results Asst Proj Coordinator</title>

<link rel="stylesheet" href="results.css" style="text/css">


<script type="text/javascript">
var timer = null;
function auto_reload ()
{
window .location = 'http://www.francis.com/myleader/results_asst_coordinator.php' ;
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
$SQL_SECRETARY = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q3'";
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
		


//asst sec gen
$SQL_z = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q6'";
			$result = mysql_query($SQL_z);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_z = $db_field['A'];
			$answerB_z = $db_field['B'];
			$answerC_z = $db_field['C'];
			

			$qA_z = $db_field['qA'];
			$qB_z = $db_field['qB'];
			$qC_z = $db_field['qC'];
			
			
	$totalvotes_z=$answerA_z+$answerB_z+$answerC_z;
		if ($totalvotes_z==0){
										
										$message="NO <br>votes CAST";
		}
		else{
										$percentA_z = (($answerA_z * 100) / $totalvotes_z);
										$percentA_z= round($percentA_z,2,PHP_ROUND_HALF_UP);
										
										$percentB_z = (($answerB_z * 100) / $totalvotes_z);
										$percentB_z= round($percentB_z,2,PHP_ROUND_HALF_UP);
										
										$percentC_z = (($answerC_z * 100) / $totalvotes_z);
										$percentC_z= round($percentC_z,2,PHP_ROUND_HALF_UP);
										
										
			}
			$imgwidthA_z=$percentA_z*3;
			$imgwidthB_z=$percentB_z*3;
			$imgwidthC_z=$percentC_z*3;
			
			
			$imgtagA_z = "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_z. ">";
			$imgtagB_z= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_z . ">";
			$imgtagC_z= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_z . ">";		
			
			
			
			//constitution
$SQL_const = "SELECT * FROM questions, answers WHERE questions.QID = answers.QID AND answers.QID = 'q7'";
			$result = mysql_query($SQL_const);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA_const = $db_field['A'];
			$answerB_const = $db_field['B'];
			$answerC_const = $db_field['C'];
			

			$qA_const = $db_field['qA'];
			$qB_const = $db_field['qB'];
			$qC_const = $db_field['qC'];
			
			
	$totalvotes_const=$answerA_const+$answerB_const+$answerC_const;
		if ($totalvotes_const==0){
										
										$message="NO <br>votes CAST";
		}
		else{
										$percentA_const = (($answerA_const * 100) / $totalvotes_const);
										$percentA_const= round($percentA_const,2,PHP_ROUND_HALF_UP);
										
										$percentB_const = (($answerB_const * 100) / $totalvotes_const);
										$percentB_const= round($percentB_const,2,PHP_ROUND_HALF_UP);
										
										$percentC_const = (($answerC_const * 100) / $totalvotes_const);
										$percentC_const= round($percentC_const,2,PHP_ROUND_HALF_UP);
										
										
			}
			$imgwidthA_const=$percentA_const*3;
			$imgwidthB_const=$percentB_const*3;
			$imgwidthC_const=$percentC_const*3;
			
			
			$imgtagA_const = "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthA_const. ">";
			$imgtagB_const= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthB_const . ">";
			$imgtagC_const= "<IMG SRC = 'green.jpg' Height = " . $imgheight . " WIDTH = " . $imgwidthC_const . ">";	
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
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."Assitant Project Coordinator"."</font>"."</b>"."<br><br>";
print "<b>".$qA_y."</b>"."<br>"." ".$imgtagA_y." ".$percentA_y. "% "."   "."<br>votes"." ".$answerA_y."<br>"."<br>";
print "<b>".$qB_y."</b>"."<br>"." ".$imgtagB_y." ".$percentB_y. "% "."   "."<br>votes"." ".$answerB_y."<br>"."<br>";
//print $qC_y."<br>"." ".$imgtagC_y." ".$percentC_y. "% "."   "."<br>votes"." ".$answerC_y."<br>"."<br>";



print "<br>votes cast:"." ".$totalvotes_y."<br>"."<br>"."<br>";

//z
/*
print "<td align='left' valign='top' id='content'>";
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."Assitant Sec Gen"."</font>"."</b>"."<br>";
print $qA_z."<br>"." ".$imgtagA_z." ".$percentA_z. "% "."   "."<br>votes"." ".$answerA_z."<br>"."<br>";
print $qB_z."<br>"." ".$imgtagB_z." ".$percentB_z. "% "."   "."<br>votes"." ".$answerB_z."<br>"."<br>";
print $qC_z."<br>"." ".$imgtagC_z." ".$percentC_z. "% "."   "."<br>votes"." ".$answerC_z."<br>"."<br>";



print "<br>votes cast:"." ".$totalvotes_z."<br>"."<br>"."<br>";
*/


/*
//const
print "<td align='left' valign='top' id='content'>";
print "<b>"."<font size='5' color='#333333' face='Consolas'>"."New constitution?"."</font>"."</b>"."<br>";
print $qA_const."<br>"." ".$imgtagA_const." ".$percentA_const. "% "."   "."<br>votes"." ".$answerA_const."<br>"."<br>";
print $qB_const."<br>"." ".$imgtagB_const." ".$percentB_const. "% "."   "."<br>votes"." ".$answerB_const."<br>"."<br>";
print $qC_const."<br>"." ".$imgtagC_const." ".$percentC_const. "% "."   "."<br>votes"." ".$answerC_const."<br>"."<br>";



print "<br>votes cast:"." ".$totalvotes_const."<br>"."<br>"."<br>";
/*
if($hour>=22){
print $winner_y;

}

*/
print "</td>"."</tr>";




?>
</table>
<a href='results_asst_secgen.php' target="_blank">Next</a>
</body>