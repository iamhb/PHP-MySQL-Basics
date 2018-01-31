<html>
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

        $fname=$_GET['t1'];
        $lname=$_GET['t2'];
        $age=$_GET['t3'];

        $qname= "INSERT INTO nest (firstname,lastname,age) VALUES ('$fname','$lname','$age')";

        $equ=mysqli_query($Conn,$qname);
        if($equ)
        {
            echo nl2br("\n  inserted");
        }
        else
        {
            echo nl2br("\n not inserted");
        }
        ?>
</html>