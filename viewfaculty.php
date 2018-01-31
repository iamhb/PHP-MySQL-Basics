<html>
  <?php

  	$Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
        {
            echo'not conected to server';
        }
        else
        {
            echo nl2br("\n connected to server");
         }
        if(!mysqli_select_db($Conn,'Depname'))
        {
            echo'cant connect to db';
        }
        else
        {
            echo nl2br("\n connected to db Depname"); 
        }
        echo "<br>";

    $sql1= "SHOW COLUMNS FROM IT";
	$result1 = mysqli_query($Conn,$sql1);
	echo nl2br("\n");
	$s=0;
	while($row = mysqli_fetch_array($result1))
		{
			$s=$s+1;
		    echo $row['Field']."<br>";
		}
	echo nl2br("\nTotal number of staff in IT Department: $s");
	?>
	</html>

