<html>
<?php 
 $as=0;$bs=0;$cs=0;$ds=0;
	echo "next page";
	echo nl2br("\n");
	$hello=array();
	$hello=$_POST['hello'];
	echo "The value is:  ".count($hello);
	for($i=0;$i<count($hello);$i++)
	{
		echo nl2br("\n");
		echo ($hello[$i]);
		if($hello[$i]=='a')
			$as++;
		elseif($hello[$i]=='b')
			$bs++;
		elseif($hello[$i]=='c')
			$cs++;
		elseif($hello[$i]=='d')
			$ds++;
	}
	echo "Total number of a:".$as;
echo "Total number of b:".$bs;
echo "Total number of c:".$cs;
echo "Total number of d:".$ds;

	?>
	</html>