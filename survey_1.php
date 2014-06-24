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
  <title>Questionnaire 1/2</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<a href="?lang=en">English</a> &nbsp; | &nbsp; <a href="?lang=fr">Fran&ccedil;ais</a>

    <form class="survey" action="survey_2.php" method="post">
    <h1 class="sign-up-title"><?php echo TITLE_1; ?></h1>
   
    <div class="example" style="color:#0099CC">    
    <?php echo QUE_1; ?>
 </div>
      <div>
        <input id="radio1" type="radio" name="question1" value="1" checked="checked"><label for="radio1"><span><span></span></span><?php echo QUE_1_OP_1; ?></label>
      </div>
      <div>
        <input id="radio2" type="radio" name="question1" value="2"><label for="radio2"><span><span></span></span><?php echo QUE_1_OP_2; ?></label>
      </div>
      <div>
        <input id="radio3" type="radio" name="question1" value="3"><label for="radio3"><span><span></span></span><?php echo QUE_1_OP_3; ?></label>
      </div>
     
     
     <hr>
     <div class="example" style="color:#0099CC">
       <?php echo QUE_2; ?></div>
      <div>
        <input type="checkbox" name="chk_group[]" value="1"><label for="checkbox1"><span></span> <?php echo QUE_2_OP_1; ?></label>
      </div>
      <div>
        <input type="checkbox" name="chk_group[]" value="2"><label for="checkbox2"><span></span><?php echo QUE_2_OP_2; ?></label>
      </div>
      <div>
        <input  type="checkbox" name="chk_group[]" value="3"><label for="checkbox3"><span></span><?php echo QUE_2_OP_3; ?></label>
      </div>
  <div>
        <input  type="checkbox" name="chk_group[]" value="4"><label for="checkbox3"><span></span><?php echo QUE_2_OP_4; ?></label>
      </div>
<div>
        <input  type="checkbox" name="chk_group[]" value="5"><label for="checkbox3"><span></span><?php echo QUE_2_OP_5; ?></label>
      </div>
<hr>
<div class="example" style="color:#0099CC">
<?php echo QUE_3; ?>
</div><div>
        <input id="radio1" type="radio" name="question3" value="1" checked="checked"><label for="radio1"><span><span></span></span><?php echo QUE_3_OP_1; ?></label>
      </div>
      <div>
        <input id="radio2" type="radio" name="question3" value="2"><label for="radio2"><span><span></span></span><?php echo QUE_3_OP_2; ?></label>
      </div>
      <div>
        <input id="radio3" type="radio" name="question3" value="3"><label for="radio3"><span><span></span></span><?php echo QUE_3_OP_3; ?></label>
      </div>
  <div>
        <input id="radio4" type="radio" name="question3" value="4"><label for="radio3"><span><span></span></span><?php echo QUE_3_OP_4; ?></label>
      </div>
    </div>
    <hr>
    <input type="submit" value="<?php echo NEXT; ?>" class="sign-up-button">
  </form>


</body>
</html>
