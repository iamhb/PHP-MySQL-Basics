<?php
session_start();
$rollno= $_SESSION['rollno'];

echo "rollno:$rollno";
$rollno=str_split($rollno);

//$strroll=strval($rollno);
//echo $strroll;
//echo (getype($rollno));
//for($i=0;$i<sizeof($rollno);$i++)
	//echo nl2br("\n $rollno[$i]");

echo nl2br("\n\n college code:");
for($i=0;$i<4;$i++)
{	$roll[$i]=$rollno[$i];
	
}echo $roll;
echo nl2br("\n\n joining year:");
for($i=4;$i<6;$i++)
echo $rollno[$i];

echo nl2br("\n\n dep code:");
for($i=6;$i<9;$i++)
echo $rollno[$i];

echo nl2br("\n\n");

$disdate=date("d-m-Y");
echo "Today is $disdate";

echo nl2br("\n current date:".date("d"));

echo nl2br("\n current month:".date("m"));

echo nl2br("\n current year:".date("Y"));

?>