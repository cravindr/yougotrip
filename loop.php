<?php
echo "start";
$flag=true;

for ($i=1;$i<=16;$i++)
{
	if(($i % 4)==1)
	{
		echo "begin<br>";
		$flag=true;		
	}
	
	echo $i."<br>";
	
	if(($i % 4)==0)
		{
		echo "end<br>";
		$flag=false;		
	}
}

if ($flag==true)
{
	echo "end<br>";
}
?>