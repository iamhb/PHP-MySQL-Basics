<?php


?>
<html>
	<head>
		<title>Department Select</title>
	</head>
	<body>
		<h1>Admin Logged in successfully</h1>
		<h3>Choose Department for Manipulating</h3>
		<form name="depchoose" action="contoMysql.php" method="post">
 
 		<label>Departments</label>
 
 		<select name="depname">
		 	<option>---DEP NAME--</option>
		 	<option value="IT">IT</option>
		 	<option value="CSE">CSE</option>
 			<option value="CHEM">CHEM</option>
 			<option value="ECE">ECE</option>
 			<option value="EEE">EEE</option>
 			<option value="MECH">MECH</option>
 			<option value="MCA">MCA</option>
 		</select>
 		<button type="submit" name="submit" >Submit</button>
 </form>
</body>
</html>