<html>
<?php
	session_start();
	$input=0;
	$input=$_POST['t1'];
	//echo $input;
	
if(isset($_POST['submit']))
{
if (strpos($input, '8204') !== false)
 {
 	echo nl2br("\n");
 	echo "connect and pass input rollno to student part";
 }
	if(strpos($input, 'it') !== false)
	{
		$_SESSION['depname']="IT";
		echo "allocationg";	
	}

}
?>
    <body>
        <form name="analysadmin" action="" method="post">
        Login:<input type="text" name="t1"/><br>
 <input name="submit1" type="submit" value="submit"></type>
        </form>
     	</body>
        </html>
        