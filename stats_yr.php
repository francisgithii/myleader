<html>
<head>
<link rel="stylesheet" href="franc.css" style="text/css">
<title>Stats_yr</title>
<script type="text/javascript">
var timer = null;
function auto_reload ()
{
window .location = 'http://www.francis.com/myleader/stats_yr.php' ;
}
<!-- Reload page every 10 seconds. -->
</script>
</head>

<body id="results" onload=" timer =setTimeout('auto_reload()',3000); "></pre></p>


<?php
$today=date("H:i:s");
$leo=date('l jS F Y');

$username="admin";
$pass_word="_E4T)YD*>ye!}k?~";
$database="myleader";
$server="myleader.cpdnlleq7c3h.eu-west-1.rds.amazonaws.com";

$franc_handle=mysql_connect($server,$username,$pass_word);
$db_found=mysql_select_db($database,$franc_handle);



if ($db_found)
{
$EC_1_registered="SELECT * FROM `register` WHERE `ID` >=1 AND `ID` <=99";
$result_number_EC_1_registered=mysql_num_rows(mysql_query($EC_1_registered));
$EC_1_voted="SELECT * FROM `register` WHERE `ID` >=1 AND `ID` <=99 AND `Password`='*BLOCKED VOTER*'";
$result_number_EC_1_voted=mysql_num_rows(mysql_query($EC_1_voted));

$CSE_1_registered="SELECT * FROM `register` WHERE `ID` >=487 AND `ID` <=536";
$result_number_CSE_1_registered=mysql_num_rows(mysql_query($CSE_1_registered));
$CSE_1_voted="SELECT * FROM `register` WHERE `ID` >=487 AND `ID` <=536 AND `Password`='*BLOCKED VOTER*'";
$result_number_CSE_1_voted=mysql_num_rows(mysql_query($CSE_1_voted));


$CPE_1_registered="SELECT * FROM `register` WHERE `ID` >=739 AND `ID` <=779";
$result_number_CPE_1_registered=mysql_num_rows(mysql_query($CPE_1_registered));
$CPE_1_voted="SELECT * FROM `register` WHERE `ID` >=739 AND `ID` <=779 AND `Password`='*BLOCKED VOTER*'";
$result_number_CPE_1_voted=mysql_num_rows(mysql_query($CPE_1_voted));


$MTI_1_registered="SELECT * FROM `register` WHERE `ID` >=934 AND `ID` <=972";
$result_number_MTI_1_registered=mysql_num_rows(mysql_query($MTI_1_registered));
$MTI_1_voted="SELECT * FROM `register` WHERE `ID` >=934 AND `ID` <=972 AND `Password`='*BLOCKED VOTER*'";
$result_number_MTI_1_voted=mysql_num_rows(mysql_query($MTI_1_voted));

$MPE_1_registered="SELECT * FROM `register` WHERE `ID` >=1088 AND `ID` <=1137";
$result_number_MPE_1_registered=mysql_num_rows(mysql_query($MPE_1_registered));
$MPE_1_voted="SELECT * FROM `register` WHERE `ID` >=1088 AND `ID` <=1137 AND `Password`='*BLOCKED VOTER*'";
$result_number_MPE_1_voted=mysql_num_rows(mysql_query($MPE_1_voted));











$EC_2_registered="SELECT * FROM `register` WHERE `ID` >=100 AND `ID` <=165";
$result_number_EC_2_registered=mysql_num_rows(mysql_query($EC_2_registered));
$EC_2_voted="SELECT * FROM `register` WHERE `ID` >=100 AND `ID` <=165 AND `Password`='*BLOCKED VOTER*'";
$result_number_EC_2_voted=mysql_num_rows(mysql_query($EC_2_voted));


$CSE_2_registered="SELECT * FROM `register` WHERE `ID` >=537 AND `ID` <=583";
$result_number_CSE_2_registered=mysql_num_rows(mysql_query($CSE_2_registered));
$CSE_2_voted="SELECT * FROM `register` WHERE `ID` >=537 AND `ID` <=583 AND `Password`='*BLOCKED VOTER*'";
$result_number_CSE_2_voted=mysql_num_rows(mysql_query($CSE_2_voted));


$CPE_2_registered="SELECT * FROM `register` WHERE `ID` >=780 AND `ID` <=809";
$result_number_CPE_2_registered=mysql_num_rows(mysql_query($CPE_2_registered));
$CPE_2_voted="SELECT * FROM `register` WHERE `ID` >=780 AND `ID` <=809 AND `Password`='*BLOCKED VOTER*'";
$result_number_CPE_2_voted=mysql_num_rows(mysql_query($CPE_2_voted));

$MTI_2_registered="SELECT * FROM `register` WHERE `ID` >=973 AND `ID` <=1002";
$result_number_MTI_2_registered=mysql_num_rows(mysql_query($MTI_2_registered));
$MTI_2_voted="SELECT * FROM `register` WHERE `ID` >=973 AND `ID` <=1002 AND `Password`='*BLOCKED VOTER*'";
$result_number_MTI_2_voted=mysql_num_rows(mysql_query($MTI_2_voted));


$MPE_2_registered="SELECT * FROM `register` WHERE `ID` >=1138 AND `ID` <=1171";
$result_number_MPE_2_registered=mysql_num_rows(mysql_query($MPE_2_registered));
$MPE_2_voted="SELECT * FROM `register` WHERE `ID` >=1138 AND `ID` <=1171 AND `Password`='*BLOCKED VOTER*'";
$result_number_MPE_2_voted=mysql_num_rows(mysql_query($MPE_2_voted));









$EC_3_registered="SELECT * FROM `register` WHERE `ID` >=166 AND `ID` <=248";
$result_number_EC_3_registered=mysql_num_rows(mysql_query($EC_3_registered));
$EC_3_voted="SELECT * FROM `register` WHERE `ID` >=166 AND `ID` <=248 AND `Password`='*BLOCKED VOTER*'";
$result_number_EC_3_voted=mysql_num_rows(mysql_query($EC_3_voted));



$CSE_3_registered="SELECT * FROM `register` WHERE `ID` >=584 AND `ID` <=620";
$result_number_CSE_3_registered=mysql_num_rows(mysql_query($CSE_3_registered));
$CSE_3_voted="SELECT * FROM `register` WHERE `ID` >=584 AND `ID` <=620 AND `Password`='*BLOCKED VOTER*'";
$result_number_CSE_3_voted=mysql_num_rows(mysql_query($CSE_3_voted));

$CPE_3_registered="SELECT * FROM `register` WHERE `ID` >=810 AND `ID` <=836";
$result_number_CPE_3_registered=mysql_num_rows(mysql_query($CPE_3_registered));
$CPE_3_voted="SELECT * FROM `register` WHERE `ID` >=810 AND `ID` <=836 AND `Password`='*BLOCKED VOTER*'";
$result_number_CPE_3_voted=mysql_num_rows(mysql_query($CPE_3_voted));


$MTI_3_registered="SELECT * FROM `register` WHERE `ID` >=1003 AND `ID` <=1025";
$result_number_MTI_3_registered=mysql_num_rows(mysql_query($MTI_3_registered));
$MTI_3_voted="SELECT * FROM `register` WHERE `ID` >=1003 AND `ID` <=1025 AND `Password`='*BLOCKED VOTER*'";
$result_number_MTI_3_voted=mysql_num_rows(mysql_query($MTI_3_voted));

$MPE_3_registered="SELECT * FROM `register` WHERE `ID` >=1172 AND `ID` <=1211";
$result_number_MPE_3_registered=mysql_num_rows(mysql_query($MPE_3_registered));
$MPE_3_voted="SELECT * FROM `register` WHERE `ID` >=1172 AND `ID` <=1211 AND `Password`='*BLOCKED VOTER*'";
$result_number_MPE_3_voted=mysql_num_rows(mysql_query($MPE_3_voted));






$EC_4_registered="SELECT * FROM `register` WHERE `ID` >=249 AND `ID` <=366";
$result_number_EC_4_registered=mysql_num_rows(mysql_query($EC_4_registered));
$EC_4_voted="SELECT * FROM `register` WHERE `ID` >=249 AND `ID` <=366 AND `Password`='*BLOCKED VOTER*'";
$result_number_EC_4_voted=mysql_num_rows(mysql_query($EC_4_voted));

$CSE_4_registered="SELECT * FROM `register` WHERE `ID` >=621 AND `ID` <=673";
$result_number_CSE_4_registered=mysql_num_rows(mysql_query($CSE_4_registered));
$CSE_4_voted="SELECT * FROM `register` WHERE `ID` >=621 AND `ID` <=673 AND `Password`='*BLOCKED VOTER*'";
$result_number_CSE_4_voted=mysql_num_rows(mysql_query($CSE_4_voted));

$CPE_4_registered="SELECT * FROM `register` WHERE `ID` >=837 AND `ID` <=884";
$result_number_CPE_4_registered=mysql_num_rows(mysql_query($CPE_4_registered));
$CPE_4_voted="SELECT * FROM `register` WHERE `ID` >=837 AND `ID` <=884 AND `Password`='*BLOCKED VOTER*'";
$result_number_CPE_4_voted=mysql_num_rows(mysql_query($CPE_4_voted));

$MTI_4_registered="SELECT * FROM `register` WHERE `ID` >=1026 AND `ID` <=1052";
$result_number_MTI_4_registered=mysql_num_rows(mysql_query($MTI_4_registered));
$MTI_4_voted="SELECT * FROM `register` WHERE `ID` >=1026 AND `ID` <=1052 AND `Password`='*BLOCKED VOTER*'";
$result_number_MTI_4_voted=mysql_num_rows(mysql_query($MTI_4_voted));

$MPE_4_registered="SELECT * FROM `register` WHERE `ID` >=1212 AND `ID` <=1245";
$result_number_MPE_4_registered=mysql_num_rows(mysql_query($MPE_4_registered));
$MPE_4_voted="SELECT * FROM `register` WHERE `ID` >=1212 AND `ID` <=1245 AND `Password`='*BLOCKED VOTER*'";
$result_number_MPE_4_voted=mysql_num_rows(mysql_query($MPE_4_voted));






$EC_5_registered="SELECT * FROM `register` WHERE `ID` >=367 AND `ID` <=486";
$result_number_EC_5_registered=mysql_num_rows(mysql_query($EC_5_registered));
$EC_5_voted="SELECT * FROM `register` WHERE `ID` >=367 AND `ID` <=486 AND `Password`='*BLOCKED VOTER*'";
$result_number_EC_5_voted=mysql_num_rows(mysql_query($EC_5_voted));

$CSE_5_registered="SELECT * FROM `register` WHERE `ID` >=674 AND `ID` <=738";
$result_number_CSE_5_registered=mysql_num_rows(mysql_query($CSE_5_registered));
$CSE_5_voted="SELECT * FROM `register` WHERE `ID` >=674 AND `ID` <=738 AND `Password`='*BLOCKED VOTER*'";
$result_number_CSE_5_voted=mysql_num_rows(mysql_query($CSE_5_voted));

$CPE_5_registered="SELECT * FROM `register` WHERE `ID` >=885 AND `ID` <=933";
$result_number_CPE_5_registered=mysql_num_rows(mysql_query($CPE_5_registered));
$CPE_5_voted="SELECT * FROM `register` WHERE `ID` >=885 AND `ID` <=933 AND `Password`='*BLOCKED VOTER*'";
$result_number_CPE_5_voted=mysql_num_rows(mysql_query($CPE_5_voted));

$MTI_5_registered="SELECT * FROM `register` WHERE `ID` >=1053 AND `ID` <=1087";
$result_number_MTI_5_registered=mysql_num_rows(mysql_query($MTI_5_registered));
$MTI_5_voted="SELECT * FROM `register` WHERE `ID` >=1053 AND `ID` <=1087 AND `Password`='*BLOCKED VOTER*'";
$result_number_MTI_5_voted=mysql_num_rows(mysql_query($MTI_5_voted));

$MPE_5_registered="SELECT * FROM `register` WHERE `ID` >=1246 AND `ID` <=1290";
$result_number_MPE_5_registered=mysql_num_rows(mysql_query($MPE_5_registered));
$MPE_5_voted="SELECT * FROM `register` WHERE `ID` >=1246 AND `ID` <=1290 AND `Password`='*BLOCKED VOTER*'";
$result_number_MPE_5_voted=mysql_num_rows(mysql_query($MPE_5_voted));


$registered_1=$result_number_EC_1_registered+$result_number_CSE_1_registered+$result_number_CPE_1_registered+$result_number_MTI_1_registered+$result_number_MPE_1_registered;
$registered_2=$result_number_EC_2_registered+$result_number_CSE_2_registered+$result_number_CPE_2_registered+$result_number_MTI_2_registered+$result_number_MPE_2_registered;
$registered_3=$result_number_EC_3_registered+$result_number_CSE_3_registered+$result_number_CPE_3_registered+$result_number_MTI_3_registered+$result_number_MPE_3_registered;
$registered_4=$result_number_EC_4_registered+$result_number_CSE_4_registered+$result_number_CPE_4_registered+$result_number_MTI_4_registered+$result_number_MPE_4_registered;
$registered_5=$result_number_EC_5_registered+$result_number_CSE_5_registered+$result_number_CPE_5_registered+$result_number_MTI_5_registered+$result_number_MPE_5_registered;



$voted_1=$result_number_EC_1_voted+$result_number_CSE_1_voted+$result_number_CPE_1_voted+$result_number_MTI_1_voted+$result_number_MPE_1_voted;
$voted_2=$result_number_EC_2_voted+$result_number_CSE_2_voted+$result_number_CPE_2_voted+$result_number_MTI_2_voted+$result_number_MPE_2_voted;
$voted_3=$result_number_EC_3_voted+$result_number_CSE_3_voted+$result_number_CPE_3_voted+$result_number_MTI_3_voted+$result_number_MPE_3_voted;
$voted_4=$result_number_EC_4_voted+$result_number_CSE_4_voted+$result_number_CPE_4_voted+$result_number_MTI_4_voted+$result_number_MPE_4_voted;
$voted_5=$result_number_EC_5_voted+$result_number_CSE_5_voted+$result_number_CPE_5_voted+$result_number_MTI_5_voted+$result_number_MPE_5_voted;




$percentage_1=$voted_1/$registered_1*100;
$percentage_1=round($percentage_1,2,PHP_ROUND_HALF_UP);

$percentage_2=$voted_2/$registered_2*100;
$percentage_2=round($percentage_2,2,PHP_ROUND_HALF_UP);

$percentage_3=$voted_3/$registered_3*100;
$percentage_3=round($percentage_3,2,PHP_ROUND_HALF_UP);

$percentage_4=$voted_4/$registered_4*100;
$percentage_4=round($percentage_4,2,PHP_ROUND_HALF_UP);

$percentage_5=$voted_5/$registered_5*100;
$percentage_5=round($percentage_5,2,PHP_ROUND_HALF_UP);

print "<table id=stat align=center valign=top><tr><td colspan=4><H2>TSA ELECTIONS 2016</H2></td></tr>
<tr><td colspan=4>STATISTICS AS AT : $today, $leo</td></tr>
<tr>			<td>Year</td>		<td>Registered</td>			<td>Voted</td>			<td>%</td></tr>";
print "<tr>		<td>1</td>	<td> $registered_1</td>					<td>$voted_1</td>				<td>$percentage_1</td></tr>";
print "<tr>		<td>2</td>			<td>$registered_2</td>					<td>$voted_2</td>				<td>$percentage_2</td></tr>";
print "<tr>		<td>3</td>			<td>$registered_3</td>					<td>$voted_3</td>				<td>$percentage_3</td></tr>";
print "<tr>		<td>4</td>			<td>$registered_4</td>					<td>$voted_4</td>				<td>$percentage_4</td></tr>";
print "<tr>		<td>5</td>			<td>$registered_5</td>					<td>$voted_5</td>				<td>$percentage_5</td></tr>";

}
else
{
print "database no t found";
}
?>