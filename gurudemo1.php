<!DOCTYPE html>
<html>
<head></head>
<body>
<div style="=background: yellow; height: 400px; border-left: 6px red solid;right: 250px; position: absolute;">
</body>
</html>
<?php
echo "<form  action='http://localhost/img/gurudemo2.php' method='post'>";
//echo "Staffname:<input type='text' name='s'/><br>";
echo nl2br("\n");
for($sta=1;$sta<=4;$sta++)
echo ("Staff $sta---------------------------------");
echo nl2br("\n");
for($k=0;$k<7;$k++)
    {
    for($l=0;$l<4;$l++)
    {
		for($i=0;$i<4;$i++)
		{  
	 		if($i==0)$j="a";
    		elseif($i==1)$j="b";
    		elseif($i==2)$j="c";
    		elseif($i==3)$j="d";
			echo $j;
  			echo "<input type='radio' name='hello[$k][$l]' value='$j'>";
  			echo nl2br("\t");
		}
		echo nl2br("\t----------------\t");

	}
		echo nl2br("\n");
		echo("---------------------------------------------------------------------");
		echo("---------------------------------------------------------------");

		echo nl2br("\n");
	}
echo "<input type='submit' value='Send'/>";
echo "</form>";
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<div style="=background: yellow; height: 400px; border-left: 6px red solid;right: 250px; position: absolute;">
</body>
</html>