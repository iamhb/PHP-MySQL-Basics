<?php
   //include('session.php');
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

?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo "hari"; ?></h1> 
   </body>
   
</html>