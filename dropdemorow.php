
<?php
        $Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
        {
            echo'not conected to server';
        }
        else
        {
            echo nl2br("\n connected");
         }
        if(!mysqli_select_db($Conn,'shiva'))
        {
            echo'cant connect to db';
        }
        else
        {
            echo nl2br("\n connected to shiva"); 
        }
        if(isset($_POST['submit']))
        {
            $display=$_POST['rowselect'];
            echo $display;
        }

?>
<html>
<head>
    <title>Demo</title>
</head>
<body>
    <form name="form1" action="" method="post">
        <select name="rowselect">
        <?php
        $res=mysqli_query($Conn,"select * from nest");
        while($row=mysqli_fetch_array($res))
        {
            ?>
            <option value="<?php echo $row['age'];?>"><? echo $row['age'];?></option>
        }            
        <?php
        }
?>
</select>

    <button type="submit" name="submit" >Submit</button>
            </form>
</body>