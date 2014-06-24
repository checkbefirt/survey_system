   
<?php
// Check if session is not registered, redirect back to main page. 
session_start();
if(!$_SESSION['myuse']) {
header("location:index.php");
}
echo 'Welcome : '.$_SESSION['myuse']; 
?>