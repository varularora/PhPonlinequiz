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
    <li><a href="#">Register</a></li>
        <li><a href="#">Contact</a></li>
  </ul>
</div>

<?php
include("header.php");
?><br><br><br><br><br><br><br><br><br><p align = "middle">
 <table width="50%" border="0">
   <tr>
     <td width="468" height="57"><font color="gray"><h1>New User Signup</font></h1></td>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <table width="301" border="7" align="left">
         <tr>
           <td><div align="left" class="style7">Login Id </div></td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>

 <script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
    if(document.form1.name.value=="1")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="2")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="3")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="4")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="5")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="6")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="7")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="8")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="9")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
 if(document.form1.name.value=="0")
  {
    alert("Plese Enter Characters Only in Name Field");
	document.form1.name.focus();
	return false;
  }

  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>


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
