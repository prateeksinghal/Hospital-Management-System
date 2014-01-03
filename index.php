<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login | Hospital Management</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php
if((isset($_GET['pid']))&&($_GET['pid']==01))
{
	require("include/dbinfo.php");
	$link=mysql_connect($server,$user,$pass)or die(errorReport(mysql_error()));
	mysql_select_db($db,$link)or die(errorReport(mysql_error()));
	$username=$_POST['login'];
	$result=mysql_query("select * from Passwords where Username='$username'");
	if($row=mysql_fetch_array($result))
	{
		if((!strcmp($row['Username'],$_POST['login']))&&(!strcmp($row['Password'],$_POST['password'])))
		{
			$username=$_POST['login'];
			$result=mysql_query("select * from session where username='$username'");
			$row=mysql_fetch_array($result);
			if(strcmp($row['Username'],""))
			{
				echo "<script type=\"text/javascript\">alert(\"Multiple logins not allowed. Access Denied.\")</script>";
			}
			else
			{
				session_start();
				$sessionid=$_COOKIE['PHPSESSID'];
				$_SESSION['username']=$username;
				mysql_query("insert into session value ('$username','$sessionid')");
				setcookie("username",$_POST['login'],time()+3600);
				header('Location: login.php');
			}
		}
		else echo "<script type=\"text/javascript\">alert(\"Wrong Password. Access Denied.\")</script>";
	}
	else echo "<script type=\"text/javascript\">alert(\"Username doesn't exist.\")</script>";
}
?>
<br/>
<h1><center>Hospital Management System</center></h1>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="index.php?pid=01">
        <p><input type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <!---<p><font color=#000000>Forgot your password? <a href="index.html">Click here to submit a reset request</a>.</font></p>-->
    </div>
  </section>
</body>
</html>
