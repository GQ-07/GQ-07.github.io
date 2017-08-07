<?php
     $rate = 60;
     
	 if(isset($_POST['bucks']))
	 $bucks = $_POST['bucks'];
     else
	    $bucks = 0;
?>

<!DOCTYPE html>
<html>
     <head>
	   <title>Наш сайт</title>
	   <meta charset="cp1251" />
	   </head>
	   <body>
	      <form method="post">
		      <input type="text" name="bucks" value="<?php echo $bucks;?>" size="5"/> $
			  <input  type="submit" value="=" /> <?php echo $rate * $bucks;?> руб.
		</form>
	</body>
</html>