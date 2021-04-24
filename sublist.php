
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <div id="logo">
    <h1>ONLINE<br />
      QUIZ</a></h1>
  </div>
  <ul id="topmenu">
    <li class="current"><a href="#">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="#">Register</a></li>
        <li><a href="#">Contact</a></li>
  </ul>
</div>
<br><br><br><br><br><br><br>
<?php
session_start();		
include("header.php");
include("database.php");
echo"<h1>Select Subje Select Subject to Give Quiz</h1>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</div>
<ul id="menu">
 <li><a href="currentaffairs.html">Current Affairs</a></li>
  <li><a href="visualbasic.html">Visual Basic Concepts</a></li>
  <li><a href="java.html">Java Concepts</a></li>
  <li><a href="oops.html">OOPS Concepts</a></li>
  <li><a href="c.html">C Concepts</a></li>
  <li><a href="datas.html">Data Structures using c Concept</a></li>
  <li><a href="php.html">Php Concepts</a></li>
</ul>
</ul>
<div id="footer">  Designed by :Varul Arora and Ravit Alaugh </a></div>
</body>
</html>
