<?php
	$arr = array ("A Public 100",
	"B Strong 101",
	"C Small -300",
	"D Big 201",
	"E Bigger 400",
	"F Best -100",
	"G Smallest 200");
	$fp = fopen('file.csv', 'w');
	for ($i=0;$i<count($arr);$i++){
		//echo $arr[$i];
		$t = explode(" ", $arr[$i]);
		if ($t[2]>0){
		fputcsv($fp, $t);
			var_dump($t);
			echo "<br />";
		}
	}
	fclose($fp);
?>