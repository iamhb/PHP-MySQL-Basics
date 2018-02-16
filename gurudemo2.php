<html>
<?php 
 $as=0;$bs=0;$cs=0;$ds=0;
	echo "next page";
	echo nl2br("\n");
	$hello=array();
	$hello=$_POST['hello'];

	for($i=0;$i<7;$i++)
	{
		for($j=0;$j<4;$j++)
		{
		echo ($hello[$i][$j]);echo ("--");
		}
		echo nl2br("\n");
	}
	$s=1;

for($j=0;$j<4;$j++)
{
	for($i=0;$i<7;$i++)
	{
			if($hello[$i][$j]=='a')
				$as++;
			if($hello[$i][$j]=='b')
				$bs++;
			if($hello[$i][$j]=='c')
				$cs++;
			if($hello[$i][$j]=='d')
				$ds++;	
	}
		echo ("staff-");echo($s);$s++;
	echo nl2br("\n Total number of a:".$as);
	echo nl2br("\n Total number of b:".$bs);
	echo nl2br("\n Total number of c:".$cs);
	echo nl2br("\n Total number of d:".$ds);
	$as=0;$bs=0;$cs=0;$ds=0;
	echo nl2br("\n");
	echo nl2br("\n");
}

	?>
	</html>