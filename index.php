<?php 
//language select
   $lang=$_GET['lang'];
if ($lang=='fr') {          
  	 include('lang/fr.php');
	} 
  	   	 else
	  {     
	  $lang=='en';
   	 include('lang/en.php');
	}

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign In to start survey</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<a href="?lang=en">English</a> &nbsp; l &nbsp; <a href="?lang=fr">Fran&ccedil;ais</a>
    <form class="sign-up" method="POST">
    <h1 class="sign-up-title"><?php echo TITLE; ?></h1>
    <input type="email" name="myuse" class="sign-up-input" placeholder="<?php echo USERNAME; ?>"  autofocus required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_.@]{8,20}$">
    <input type="password" name="mypas" class="sign-up-input" placeholder="<?php echo PASSWORD; ?>" required="required" >
    <input type="submit" value="<?php echo SIGNUP; ?>" class="sign-up-button">
   <?php
    
include("include/db.php");

if (isset($_POST["myuse"])) {

// username and password sent from form 
$myuse=$_POST['myuse']; 
$mypas=MD5($_POST['mypas']);

// To protect MySQL injection (more detail about MySQL injection)
$myuse = stripslashes($myuse);
$mypas = stripslashes($mypas);
$myuse = mysql_real_escape_string($myuse);
$mypas = mysql_real_escape_string($mypas);
$sql="SELECT * FROM ".TABLE_NAME." WHERE Email='$myuse' and Password='$mypas'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if(mysql_num_rows($result)){
    
//check if the user has made the survey befor
$sql="SELECT UserDB.CID FROM questionnaire,UserDB where (questionnaire.user_id=UserDB.CID)
and
(Email='$myuse')";
$result=mysql_query($sql);
if(mysql_num_rows($result)){
echo "<a style='color:red'>".ALREADY_DONE."</a>";
}
else
{
 // Register $myuse, redirect to file "survey_A.php"
session_start();
$_SESSION['myuse'] = $myuse;
header("location:survey_1.php");
}
}
else {
echo "<a style='color:red'>". ERROR ."</a>";
}
}

?>
    </form>


</body>
</html>
