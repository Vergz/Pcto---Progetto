<?php 
function calendario()
{
	$mydate=array("",date("l"),date("m"),date("m"),date("d"),date("Y"));
	$settimana = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	$x=0;
	$i=0;
	$cont=0;
		while($x==0)
		{
			if(strcmp($mydate[1],$settimana[$i])==0)
			{
				$x=1;
			}
			$i++;
		}
	$x=$mydate[4];
	$z=cal_days_in_month(CAL_GREGORIAN, $mydate[2], $mydate[5]);

		while($i!=1)
		{
			if($x>1)
			{
				$x--;   
				$i--;	
			}	
		}
	
		for($y=0;$y!=$x;$y++)
		{
			$i--;	
		}
	$x=abs($i);
	$y=$x/7;
    $x=$x-(7*floor($y));
	$x=7-$x;
		echo "<table class='calendario'>
		<tr>
			<td>Lunedì</td>
			<td>Martedì</td>
			<td>Mercoledì</td>
			<td>Giovedì</td>
			<td>Venerdì</td>
			<td>Sabato</td>
			<td>Domenica</td>
		</tr>
		<tr>";
    if($x!=7)
	{
		for($y=0;$y!=$x;$y++)
		{
			echo "<td></td>";
			$cont++;		
		}
	}
	
	$x=0;
	$f=$cont;
	for($y=0;$y!=$z;$y++)
	{
		$x++;
		if($x==$mydate[4])
		{
		echo "<td><button class='btncalendario' id='bcl".$x."' onclick='btncalendario(". $x . ")'>".$x."</button></td>";	
		}
		else{
		echo "<td><button class='btncalendariobase' id='bcl".$x."' onclick='btncalendario(". $x . ")'>".$x."</button></td>";	
		}
		$cont++;
			if($cont%7==0&&$cont!=$z)
			{
			echo "</tr><tr>";	
			}
			if($cont==$z+$f)
			{
				echo "</tr>";
			}
	}
	echo "</table>";
}
?>