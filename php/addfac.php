<?php

session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name=$_POST['facname'];
  echo "$name";
  echo $depname;
  //$name=str_replace(" ","_",$name);
   //$name=str_replace(".","%",$name);
  $Conn=mysqli_connect('localhost','root','');
  if(!mysqli_select_db($Conn,$depname))
          {
               echo "<script>alert('Not Connected to Database')</script>";
          }
        else
        {
          echo "connected to db";
        }

  $qname= "ALTER TABLE facultyname ADD $name VARCHAR(60)";
  $equ=mysqli_query($Conn,$qname);
   if($equ)
          {
            $name=str_replace("_"," ",$name);
            echo "<script>alert('$name inserted in $depname successfully;')</script>";
          }
          else
          {
              echo "<script>alert('Not Inserted')</script>";
          }  
}
?>

<html>
<head>
  <meta charset="utf-8">

  <title>Add Faculty</title>
  <meta name="GENERATOR" content="WDL-Website-Builder">
</head>

<body>
  <form name="add" action="" method="post">
  <p align="center"><font size="6"><strong><?php echo"$depname Department" ?></strong></font></p>
  <p align="center"><font size="6"><strong>Add Faculty</strong></font></p>

  <p align="center">&nbsp;</p>

  <p align="center"><font size="5">Staff name:&nbsp;
    <input name="facname" id="add staff" type="text" size="30" maxlength="25"></font></p>

  <p align="center">
<input type="submit" value="submit"></type</p>

  <p align="left">&nbsp;</p>
</form>
</body>
</html>