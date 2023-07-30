<html>
<head>
<link rel="stylesheet" href="franc.css" style="text/css">
<title>Stats_dept</title>
<script type="text/javascript">
var timer = null;
function auto_reload ()
{
window .location = 'http://www.francis.com/myleader/stats_dept.php' ;
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


$registered_EC=$result_number_EC_1_registered+$result_number_EC_2_registered+$result_number_EC_3_registered+$result_number_EC_4_registered+$result_number_EC_5_registered;
$registered_CSE=$result_number_CSE_1_registered+$result_number_CSE_2_registered+$result_number_CSE_3_registered+$result_number_CSE_4_registered+$result_number_CSE_5_registered;
$registered_CPE=$result_number_CPE_1_registered+$result_number_CPE_2_registered+$result_number_CPE_3_registered+$result_number_CPE_4_registered+$result_number_CPE_5_registered;
$registered_MTI=$result_number_MTI_1_registered+$result_number_MTI_2_registered+$result_number_MTI_3_registered+$result_number_MTI_4_registered+$result_number_MTI_5_registered;
$registered_MPE=$result_number_MPE_1_registered+$result_number_MPE_2_registered+$result_number_MPE_3_registered+$result_number_MPE_4_registered+$result_number_MPE_5_registered;

$voted_EC=$result_number_EC_1_voted+$result_number_EC_2_voted+$result_number_EC_3_voted+$result_number_EC_4_voted+$result_number_EC_5_voted;
$voted_CSE=$result_number_CSE_1_voted+$result_number_CSE_2_voted+$result_number_CSE_3_voted+$result_number_CSE_4_voted+$result_number_CSE_5_voted;
$voted_CPE=$result_number_CPE_1_voted+$result_number_CPE_2_voted+$result_number_CPE_3_voted+$result_number_CPE_4_voted+$result_number_CPE_5_voted;
$voted_MTI=$result_number_MTI_1_voted+$result_number_MTI_2_voted+$result_number_MTI_3_voted+$result_number_MTI_4_voted+$result_number_MTI_5_voted;
$voted_MPE=$result_number_MPE_1_voted+$result_number_MPE_2_voted+$result_number_MPE_3_voted+$result_number_MPE_4_voted+$result_number_MPE_5_voted;


$result_number_CSE_3_voted;


$percentage_EC=$voted_EC/$registered_EC*100;
$percentage_EC=round($percentage_EC,2,PHP_ROUND_HALF_UP);

$percentage_CSE=$voted_CSE/$registered_CSE*100;
$percentage_CSE=round($percentage_CSE,2,PHP_ROUND_HALF_UP);

$percentage_CPE=$voted_CPE/$registered_CPE*100;
$percentage_CPE=round($percentage_CPE,2,PHP_ROUND_HALF_UP);

$percentage_MTI=$voted_MTI/$registered_MTI*100;
$percentage_MTI=round($percentage_MTI,2,PHP_ROUND_HALF_UP);

$percentage_MPE=$voted_MPE/$registered_MPE*100;
$percentage_MPE=round($percentage_MPE,2,PHP_ROUND_HALF_UP);

print "<table id=stat align=center valign=top><tr><td colspan=4><H2>TSA ELECTIONS 2016</H2></td></tr>
<tr><td colspan=4>STATISTICS AS AT : $today, $leo</td></tr>
<tr>			<td>Department</td>		<td>Registered</td>			<td>Voted</td>			<td>%</td></tr>";
print "<tr>		<td>EC + TLE +CEN</td>	<td> $registered_EC</td>					<td>$voted_EC</td>				<td>$percentage_EC</td></tr>";
print "<tr>		<td>CSE</td>			<td>$registered_CSE</td>					<td>$voted_CSE</td>				<td>$percentage_CSE</td></tr>";
print "<tr>		<td>CPE</td>			<td>$registered_CPE</td>					<td>$voted_CPE</td>				<td>$percentage_CPE</td></tr>";
print "<tr>		<td>MTI</td>			<td>$registered_MTI</td>					<td>$voted_MTI</td>				<td>$percentage_MTI</td></tr>";
print "<tr>		<td>MPE</td>			<td>$registered_MPE</td>					<td>$voted_MPE</td>				<td>$percentage_MPE</td></tr>";

}
else
{
print "database no t found";
}
?>