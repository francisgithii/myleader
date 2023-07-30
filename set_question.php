<?php

$message="";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$question=htmlspecialchars(rtrim($_POST['question']));
$answerA=htmlspecialchars(ucwords(strtolower(rtrim($_POST['answerA']))));
$answerB=htmlspecialchars(ucwords(strtolower(rtrim($_POST['answerB']))));
$answerC=htmlspecialchars(ucwords(strtolower(rtrim($_POST['answerC']))));


$username="admin";
$password="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";

$franc_handle=mysql_connect($server,$username,$password);
$db_found=mysql_select_db($database,$franc_handle);


if ($db_found)
{
print $SQL="SELECT * FROM  questions";
$result=mysql_query($SQL);
$rows=mysql_num_rows($result);

$lastrow=mysql_data_seek($result,($rows-1));

$fetchlastrow=mysql_fetch_row($result);
$qID=$fetchlastrow[0];


$nextquestion=ltrim($qID,'q');
$nextquestion++;
$question_number='q'.$nextquestion;


$SQL = "INSERT INTO questions (QID, Question, qA, qB, qC) VALUES ('$question_number', '$question', '$answerA', '$answerB', '$answerC')";

$result = mysql_query($SQL);


$SQL = "INSERT INTO answers (QID, A, B, C) VALUES ('$question_number', 0, 0, 0)";
$result = mysql_query($SQL);
		
mysql_close($franc_handle);


$message="voters question added to database";
		
		
}
else
{
$message="database not found";
}


}
?>

<h1 align="center">Voter'ss Question</h1>
<form name="form1" method="POST" action="set_question.php">
Enter question :<input type="text" name="question" value="Voter's question here" ><BR><BR>
Answer A:<input type="text" name="answerA" value="a3" >
Answer B:<input type="text" name="answerB" value="b3" >
Anser C:<input type="text" name="answerC" value="c3" ><BR><BR>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Set this Question"><br>
<?php print $message; ?>
</form>


