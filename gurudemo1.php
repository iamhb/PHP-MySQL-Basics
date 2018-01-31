<?php
echo "<form  action='http://localhost/img/gurudemo2.php' method='post'>";
//echo "Staffname:<input type='text' name='s'/><br>";
echo "if classes are ok?";
    for($k=0;$k<4;$k++)
    {
for($i=0;$i<4;$i++)
	
{   if($i==0)$j="a";
    elseif($i==1)$j="b";
    elseif($i==2)$j="c";
    elseif($i==3)$j="d";
   
echo nl2br("\n");
echo $j;
  echo "<input type='radio' name='hello[$k]' value='$j'><br/>";
}}
echo "<input type='submit' value='Send'/>";
echo "</form>";
?>