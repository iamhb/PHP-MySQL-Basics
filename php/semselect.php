<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
//$_SESSION['sem']=$sem;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $com=$_SESSION['com'];

  if($com=="del")
  { 
    $sem=$_POST['sem'];
    $_SESSION['sem']=$sem;
    header("location: delsub.php");
  }
  
    if($com=="edit")
  {
    $sem=$_POST['sem'];
    $_SESSION['sem']=$sem;
    header("location: editsub.php");
  }
   if($com=="view")
  {
    $sem=$_POST['sem'];
    $_SESSION['sem']=$sem;
    header("location: viewsub.php");
  }





}
?>
<html>
<body>
<form action="" method="post">
  <select name="sem">
    <option value="sem1">SEM-1</option>
    <option value="sem2">SEM-2</option>
    <option value="sem3">SEM-3</option>
    <option value="sem4">SEM-4</option>
    <option value="sem5">SEM-5</option>
    <option value="sem6">SEM-6</option>
    <option value="sem7">SEM-7</option>
    <option value="sem8">SEM-8</option>
  </select>
  <br><br>
  <input type="submit">
</form>

</body>
</html>

