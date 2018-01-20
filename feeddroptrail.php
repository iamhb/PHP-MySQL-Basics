	<html>
	<?php
		$depname=$_GET["depname"];	
		 $name=$_GET['t1'];

		if(isset($_GET["submit"]))
		{
			
			echo '</br>' . " Drop Down List Value is : " . $depname;
		}	

		$Conn=mysqli_connect('localhost','root','');
		if (!$Conn) 
		{
			echo '</br>'.'not connected to MySQL server'; 
		}
		else
		{
			echo '</br>'.'Connected to MySQL server';
		}
		

		switch ($depname) 
		{
			case 'IT':
				if(!mysqli_select_db($Conn,'Depname'))
	        	{
	            	echo'cant connect to db';
	        	}
	        	else
	        	{
	           	    echo nl2br("\n connected to IT Database"); 
	        	}
			break;
			
			default:
				echo '</br>'. 'Coded only for IT dep only';
				break;
		}

	 	$qname= "ALTER TABLE $depname ADD $name VARCHAR(60)";
	        $equ=mysqli_query($Conn,$qname);
	        if($equ)
	        {
	            echo nl2br("\n  inserted");
	        }
	        else
	        {
	            echo nl2br("\n not inserted");
	        }

	    $sql1= "SHOW COLUMNS FROM IT";
		$result1 = mysqli_query($Conn,$sql1);
		echo nl2br("\n");
		echo nl2br("\n");
		while($row = mysqli_fetch_array($result1))
		{
		echo $row['Field']."<br>";
		}

		$q=mysql_query("SELECT * FROM IT"); 
		$info=mysql_fetch_array($Conn,$q); 
		echo count($info);

	?>
	</html>