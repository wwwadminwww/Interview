<?php
	$f=fopen('task2.txt','r');
	$csv=fopen('result.csv','w');
	$str="";
	while (!feof($f)){
		$t=explode(" ",fgets($f));
		if ($t[2]>=0 and $t[2]<=2000){
			for ($i=0;$i<count($t);$i++){
				$str.=trim($t[$i]).";";
			}
			fwrite($csv,$str."\n");
			$str="";
		}
	}
	echo "Done";
	fclose($f);
	fclose($csv);
?>