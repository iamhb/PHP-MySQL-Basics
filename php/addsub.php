<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

if(isset($_POST['submit']))
{
  $subname=$_POST['subname'];
  $subcode=strtoupper($_POST['subcode']);
  $sem=$_POST['selectsem'];
  if(!$subname and !$subcode and !$sem)
    echo "<script>alert('Invalid Details')</script>";
  elseif(!$subname)echo "<script>alert('Enter Subject Name')</script>";
  elseif (!$subcode)echo "<script>alert('Enter Subject Code')</script>";
  elseif (!$sem)echo "<script>alert('Enter Sem')</script>";
  elseif($subname and $subcode and $sem)
  {
  
    $Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
            echo'not conected to server';

        if(!mysqli_select_db($Conn,$depname))
            echo "<script>alert('Not Connected to Database')</script>";
        else
            $qname= "INSERT INTO  `{$sem}` (subname,subcode) VALUES ('".$subname."','".$subcode."')";

        $equ=mysqli_query($Conn,$qname);
        if($equ)
        {
          $sem=str_replace("sem","",$sem);
            echo "<script>alert('$subname-$subcode was added Successfully in Sem-$sem')</script>";
        }
        else
        {
            echo nl2br("\n not inserted");
        }      
  }
}
?>
<html>
<head>
  <meta charset="utf-8">

  <title>Add Subject</title>
  <meta name="GENERATOR" content="WDL-Website-Builder">
</head>

<body>
  <p align="center"><font size="6"><strong> <?php echo"$depname Department" ?></strong></font></p>
  <p align="center"><font size="6"><strong>Add Subject</strong></font></p>

  <p align="center">&nbsp;</p>

  <form method="post" name="addsub" action="">
    <p align="center"><font size="5">Sem: <select name="selectsem" id="s">
  <option value="" selected>
      </option>
      <option value="sem1">1</option>
      <option value="sem2">2</option>
      <option value="sem3">3</option>
      <option value="sem4">4</option>
      <option value="sem5">5</option>
      <option value="sem6">6</option>
      <option value="sem7">7</option>
      <option value="sem8">8</option>
      </select></font></p>

    <p align="center"><font size="5">Subject name:  <input name="subname" id="add sub name" type="text" size="40" maxlength="40"></font></p>

    <p align="center"><font size="5">Subject Code:  <input name="subcode" id="add sub code" style="text-transform: uppercase;" type="text" size="10" maxlength="8"></font></p>

    <p align="center"><input name="submit" width="40" height="30" id="addS" type="submit" value="Add Subject"></p>
</script>
  </form>
  <p align="left">&nbsp;</p>
</body>
</html>