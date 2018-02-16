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
        if(!mysqli_select_db($Conn,'IT'))
        {
            echo'cant connect to db';
        }
        else
        {
            echo nl2br("\n connected to shiva"); 
        }


$sql = "SELECT subname FROM sem1";
if($sql)
{
    echo "work1";
}
$result = mysqli_query($Conn,$sql);
if($result)
{
    echo "work2";
}

echo "<select name='username'>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<option value='" . $row['subname'] ."'>" . $row['subname'] ."</option>";
}
echo "</select>";

?>
</html>

<html>
<?php
$sql = "SELECT subcode FROM sem1";
if($sql)
{
    echo "work1";
}
$result = mysqli_query($Conn,$sql);
if($result)
{
    echo "work2";
}

echo "<select name='username'>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<option value='" . $row['subcode'] ."'>" . $row['subcode'] ."</option>";
}
echo "</select>";



?>
</html>