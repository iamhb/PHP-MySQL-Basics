<?php
session_start();

$depname=$_POST['depname'];
echo $depname;
$_SESSION['depname']=$depname;

$Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
        {
            echo'not conected to server';
        }

        if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
        else
        {
        	header("location: adminindex.php");
        }

 ?>