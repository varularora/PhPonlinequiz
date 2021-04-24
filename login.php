<html>
<head>
<title>Online Quiz</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <div id="logo">
    <h1>ONLINE<br>
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
    <h2>About Us</h2>
    <img class="author" src="images/author.gif" alt="My Photo" />
    <p>This website have been designed by 2 people Varul Arora and Ravit Alaugh. Both are BCA final year students in G.G.S.I.P University. </p>
    <p>This website helps you to check your capcity of brain in different areas of comouter languages such as Visual Basic, Java etc.</p>
  </div>
<table width="50%" border="0">
  <tr>
    <td width="1%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
    <td width="29%" bgcolor="#CC3333"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
    <td height="96" valign="top"><div align="center">
        
      <span class="style5"></div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        
      </table>
     
    </form></td>
  </tr>
</table>

    <?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
  exit;
		
}
?>
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
