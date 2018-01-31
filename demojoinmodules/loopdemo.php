<?php
	echo "<form>";
	for($counter = 0; $counter < 10; $counter++)
	{
		echo "q1";
		echo "<input type = 'text' name = 'username[]' class = 'class_name'/><br/>";
		echo "<input type = 'password' name = 'password[]' class = 'class_name'/><br/>";
	}
	echo "<input type = 'submit' value = 'SEND'/>";
	echo "</form>";
?>