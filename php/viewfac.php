<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dynamically Generate Select Dropdowns</title>
</head>
<?php  
    $delname=0;

    $Conn=mysqli_connect('localhost','root','');
    
    if(!mysqli_select_db($Conn,$depname))
          {
               echo "<script>alert('Not Connected to Database')</script>";
          }

        /*if(isset($_POST['submit']))
        {
            $delname=$_POST['delete'];
            echo nl2br("\n");
            $delquery="ALTER TABLE facultyname DROP $delname";
            $equ=mysqli_query($Conn,$delquery);
            if($equ)
            {
                echo "<script>alert('$delname Deleted Successfully from $depname Department')</script>";
            }
        }*/

        $s=0;
        $sql1= "SHOW COLUMNS FROM facultyname";
        $result1 = mysqli_query($Conn,$sql1);
        $copy=array();
        $i=0;
            echo nl2br("\n");
        while($row = mysqli_fetch_array($result1))
        {   
            echo $row['Field']."<br>";
            $copy[$i]=$row['Field'];
            $i++;
        }
         sort($copy);

        echo "<br>"."Total Faculty".count($copy);

?>