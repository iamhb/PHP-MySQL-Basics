<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
//$sem=$_SESSION['sem'];
//$_SESSION['sem']=$sem;
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit Faculty</title>
</head>
<?php  
    //$delname=0;

    $Conn=mysqli_connect('localhost','root','');
    
    if(!mysqli_select_db($Conn,$depname))
          {
               echo "<script>alert('Not Connected to Database')</script>";
          }

        if(isset($_POST['submit']))
        {   
            $newname=$_POST['newname'];
            $oldname=$_POST['oldname'];
            
            echo nl2br("\n");
            $delquery= "ALTER TABLE facultyname CHANGE COLUMN `$oldname` `$newname` VARCHAR(50)";
            $equ=mysqli_query($Conn,$delquery);
            if($equ)
            {
                echo "<script>alert('$delname updated Successfully in $depname Department')</script>";
            }
        }

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
<body>
<form name="deletefacultyform" action="" method="post">
    <select name="oldname">
    <?php
         foreach($copy as $item){
        ?>
        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select>
    Alter Name:<input type="text" name="newname"/><br>
    <button type="submit" name="submit" >Submit</button>
</form>
</body>
</html>