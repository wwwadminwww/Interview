<?php
	$string = "Born and raised in Indianapolis, Indiana, Vonnegut attended Cornell University, but dropped out in January 1943 and enlisted in the United States Army. As part of his training, he studied mechanical engineering at Carnegie Institute of Technology (now Carnegie Mellon University) and the University of Tennessee. ";
	
	$t=explode(" ",$string);
	//var_dump($t);
	$y=count($t);
	$out = '';
	for ($i=0;$i<=$y;$i++){
		$out.=$t[$y-$i]." "; 
	}
	echo "<br />".$string."<br />";
	echo "<br /><br />".$out;
?>