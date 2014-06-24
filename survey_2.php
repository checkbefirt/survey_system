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
include 'include/session.php';
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
  <title>Questionnaire 2/2</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<a href="?lang=en">English</a> &nbsp; | &nbsp; <a href="?lang=fr">Fran&ccedil;ais</a>
<?php

$question1 = $_POST['question1'];
$question3 = $_POST['question3'];

if (isset($_POST['chk_group'])) {
    $list2 = $_POST['chk_group'];
    for ($i=0; $i<count($list2); $i++) {
        $question2 = $question2." ".$list2[$i];
    }
$question2;

$_SESSION['question1'] = $question1;
$_SESSION['question2'] = $question2;
$_SESSION['question3'] = $question3;

}



?>
    <form class="survey" action="send.php" method="post">
      <h1 class="sign-up-title"><?php echo TITLE_2; ?></h1>
   <div class="example" style="color:#0099CC">
<?php echo QUE_4; ?>   </div>

<table border="0">
<tr><td><?php echo QUE_4_OP_1; ?> </td>
    <td>
     <select name="question4[0]">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
    </td></tr>

<tr><td> <?php echo QUE_4_OP_2; ?></td><td> <select name="question4[1]">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
 </select> </td></tr>
<tr><td> <?php echo QUE_4_OP_3; ?></td><td>    <select name="question4[2]">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
 </select>
 </td></tr>
<tr><td> <?php echo QUE_4_OP_4; ?></td><td>  <select name="question4[3]">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
 </select></td></tr>
<tr><td> <?php echo QUE_4_OP_5; ?></td><td>  <select name="question4[4]">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
 </select> </td></tr>
</table>

   <hr>
    <div class="example" style="color:#0099CC">
      <?php echo QUE_5; ?>
      </div>
        <input id="radio1" type="radio" name="question5" value="yes" checked="checked"><label for="radio1"><span><span></span></span><?php echo QUE_5_OP_1; ?></label>
       <select name="internet_type">
    <option>Modem</option>
    <option>ISDN</option>
    <option>DSL</option>
    <option><?php echo QUE_5_OP_1_4; ?></option>
    
 </select>
      </div>
      <div>
        <input id="radio2" type="radio" name="question5" value="no"><label for="radio2"><span><span></span></span><?php echo QUE_5_OP_2; ?></label>
      </div>
        
        <hr>
 <div class="example" style="color:#0099CC">
       <?php echo QUE_6; ?>
      </div>      <div>
        <input id="radio1" type="radio" name="question6" value="Under 18" checked="checked"><label for="radio1"><span><span></span></span> <?php echo QUE_6_OP_1; ?></label>
      </div>
      <div>
        <input id="radio2" type="radio" name="question6" value="18 – 25"><label for="radio2"><span><span></span></span>18 – 25</label>
      </div>
      <div>
        <input id="radio3" type="radio" name="question6" value="26 – 40"><label for="radio3"><span><span></span></span>26 – 40</label>
      </div>
  <div>
        <input id="radio4" type="radio" name="question6" value="Over 40"><label for="radio3"><span><span></span></span> <?php echo QUE_6_OP_4; ?></label>
      </div>
  

     
        
    </div>
    <hr>

    
 

    <input type="submit" value="Submit" class="sign-up-button">
  </form>


</body>
</html>
