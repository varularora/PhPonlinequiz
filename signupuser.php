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
  
<div id="contents">
  <div id="dashbar">
    <h2>Caution</h2>
    <p>Don't give your false information. </p>
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
<div id="footer">  Designed by :Varul Arora and Ravit Alaugh </a></div>
<?php
include("header.php");
extract($_POST);
include("database.php");

$rs=mysql_query("select * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";
?>
</body>
</html>
