<html>
	<?php
		$delname=$_GET["delete"];	
		if(isset($_GET["submit"]))
		{
			echo '</br>' . " Drop Down List Value is : " . $delname;
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

		if(!mysqli_select_db($Conn,'Depname'))
	        	{
	            	echo'cant connect to db';
	        	}
	        	else
	        	{
	           	    echo nl2br("\n connected to IT Database"); 
	        	}
	        ?>
	        </html>