<?php
session_start();
?>
<html>
<head>
<title>Online Quiz</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <div id="logo">
    <h1>ONLINE<br />
      QUIZ</a></h1>
  </div>
  <ul id="topmenu">
    <li class="current"><a href="index.html">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
        <li><a href="#">Contact</a></li>
  </ul>
</div>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<2)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}


echo "<br><br><br><br><h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>

</body>
</html>
