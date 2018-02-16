<html>
<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
$sem=$_SESSION['sem'];
$_SESSION['sem']=$sem;
?>

<?php
     $Conn=mysqli_connect('localhost','root','');
      if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
    if(isset($_POST["submit"]))
        {

            $subname=$_POST['username'];
            echo '</br>' . " Drop Down List Value is : $subname" ;
           
            $qname = "DELETE FROM $sem WHERE subname='$subname' ";
              if($qname)
            {
                echo "work1";
                echo "$sem";
                echo "$subname";
            }

            $exeqname=mysqli_query($Conn,$qname);

            if($exeqname)
            {
               echo "<script>alert(' $subname Deleted Successfully')</script>";
            }
        }   

        

/*$sql = "SELECT subname FROM $sem";

$result = mysqli_query($Conn,$sql);

echo "<select name='username'>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<option value='" . $row['subname'] ."'>" . $row['subname'] ."</option>";
}
echo "</select>";
*/
?>
</html>

<html>
<body>
    <form name="hllo" action="" method="post">
<?php
$sql = "SELECT subname FROM $sem";

            if($sql)
            {
                echo "work sql";
            }

$result = mysqli_query($Conn,$sql);
if($result)
            {
                echo "work result";
            }?>

<select name='username'>
    <?
while ($row = mysqli_fetch_array($result))
 {
    echo "<option value='" . $row['subname'] ."'>" . $row['subname'] ."</option>";
}
echo "</select>";?>
 <button type="submit" name="submit" >Submit</button>
</form>

</html>
