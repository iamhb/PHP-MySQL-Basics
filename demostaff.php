<html>
<?php
	$Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
        {
            echo'not conected to sql';
        }
        else
        {
            echo nl2br("\n connected to sql");
         }
        if(!mysqli_select_db($Conn,'demo'))
        {
            echo'cant connect to db';
        }
        else
        {
            echo nl2br("\n connected to demo db");
        }

	$st1=$_GET['s1'];
	$st2=$_GET['s2'];
	$st3=$_GET['s3'];
	$st4=$_GET['s4'];
	$st5=$_GET['s5'];
	$st6=$_GET['s6'];
	$st7=$_GET['s7'];
	$st8=$_GET['s8'];
	$st9=$_GET['s9'];
	$st10=$_GET['s10'];

	echo nl2br("\n (($st1+))");
	$st1=(int) $st1; 
	$st2=(int) $st2;
	$st3=(int) $st3;
	$st4=(int) $st4;
	$st5=(int) $st5;
	$st6=(int) $st6;
	$st7=(int) $st7;
	$st8=(int) $st8;
	$st9=(int) $st9;
	$st10=(int) $st10;	
	echo nl2br("\n (($st1+5))");

	$qname= "INSERT INTO demotable2 (Staff1,Staff2,Staff3,Staff4,Staff5,Staff6,Staff7,Staff8,Staff9,Staff10) VALUES ('$st1','$st2','$st3','$st4','$st5','$st6','$st7','$st8','$st9','$st10')";
	
	$ex=mysqli_query($Conn,$qname);
	if($ex)
	{
		echo nl2br("\n inserted");	
	}
	else
	{
		echo nl2br("\n not inserted");
	}

?>
	</html>
