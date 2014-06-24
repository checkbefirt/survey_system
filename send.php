<?php
include 'include/session.php';
include 'include/db.php';

?>
 <a href='include/logout.php'>Log out</a>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Thank you</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

    <form class="survey" action="survey_2.php" method="post">
    <h1 class="sign-up-title"><?php echo TITLE_3; ?></h1>
<?php
//question1
$question1= $_SESSION['question1'];
//question2
$question2=  $_SESSION['question2'];
//question3
$question3=  $_SESSION['question3'];

//question 4
    if (isset($_POST['question4'])) {
    $q4 = $_POST['question4'];
    for ($i=0; $i<count($q4); $i++) {
        $question4 = $question4." ".$q4[$i];
    }}
//question5
$question5 = $_POST['question5'];
$internet_type = $_POST['internet_type'];
if ($question5=='yes')
{
    $question5=$internet_type;
}
//question6
$question6 = $_POST['question6'];
//get the user id 
$myuse =$_SESSION['myuse'];
$sql="SELECT CID FROM ".TABLE_NAME." WHERE Email='$myuse'";
$result=mysql_query($sql);
$row    = mysql_fetch_assoc($result);
$id= $row['CID'];

if ($id) // prevent emptry saving when direct access to this page
{
// saving the survey result 
$sql="insert into questionnaire values ('','$id','$question1','$question2','$question3','$question4','$question5','$question6')";
$result=mysql_query($sql);
}

?>
    <h2><?php echo THANK; ?></h2>
    </form>
</body>
</html>
