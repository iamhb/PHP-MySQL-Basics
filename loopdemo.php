<?php
	echo "<form method = 'POST' action = 'process.php'>";
	for($counter = 0; $counter < 10; $counter++)
	{
		echo "<input type = 'text' name = 'username[]' class = 'class_name'/><br/>";
		echo "<input type = 'password' name = 'password[]' class = 'class_name'/><br/>";
	}
	echo "<input type = 'submit' value = 'SEND'/>";
	echo "</form>";
?>