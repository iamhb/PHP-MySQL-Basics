<html lang="en">
<head>
<meta charset="utf-8">
<title>Dynamically Generate Select Dropdowns</title>
</head>
<?php  
        $delname=0;
    $Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
        {
            echo'not conected to server';
        }
        else
        {
            echo nl2br("\n connected");
         }
        if(!mysqli_select_db($Conn,'Depname'))
        {
            echo'cant connect to db Depname';
        }
        else
        {
            echo nl2br("\n connected to DB"); 
        }

        if(isset($_POST['submit']))
        {
            $delname=$_POST['delete'];
            //echo " Drop Down List Value is : " . $delname;
            echo nl2br("\n");
            $delquery="ALTER TABLE IT DROP $delname";
            $equ=mysqli_query($Conn,$delquery);
            if($equ)
            {
                echo "deleted successfully";
            }
        }
        
        $s=0;
        $sql1= "SHOW COLUMNS FROM IT";
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
        //for($i=0;$i<count($copy);$i++)
        //{   echo "1";
           // echo nl2br("\n $copy[$i]");
        //}
        echo "Total Faculty".count($copy);

?>
<body>
<form name="deletefacultyform" action="" method="post">
    <select name="delete">
    <?php
         foreach($copy as $item){
        ?>
        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select>
    <button type="submit" name="submit" >Submit</button>
</form>
</body>
</html>