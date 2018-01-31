<html>
<body>
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
        if(!mysqli_select_db($Conn,'Depname'))
        {
            echo'cant connect to db';
        }
        else
        {
            echo nl2br("\n connected to DB"); 
        }

        $s=0;
	    
	    $sql1= "SHOW COLUMNS FROM IT";
		$result1 = mysqli_query($Conn,$sql1);
	
		echo nl2br("\n");
		
		while($row = mysqli_fetch_array($result1))
		{
		//echo str_replace("_"," ",$row['Field'])."<br>";
		//$s=$s+1;
		}
		echo nl2br("\n Total faculty in IT : $s");
<form>
    <select>
        <option selected="selected">Choose one</option>
        
        foreach($row as $item)
        {
        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
        <?php
        }
       
		?>
	</form>
</body>
		</html>

