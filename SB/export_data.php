<?php

    define("SERVER","devtestdormantclientdb.ch6yxomwiw5v.eu-west-1.rds.amazonaws.com");
	define("USER","noble_test");
	define("PASSWORD","VCKkKejST5HdTGrt");
	define("DATABASE","dev_nobletest");

	function pretty($data){
		echo "<pre>".print_r($data,true)."</pre>";
	}
	echo "Example for Data Export from MySQL in different formats:<br />";
	$db = mysql_connect(SERVER,USER,PASSWORD);
	mysql_select_db(DATABASE,$db);
	$query = "SELECT username,password,name FROM admin LIMIT 0,3";
	$query = mysql_query($query) or die ("Query ERROR:".mysql_error( ));
    echo "QUERY SUCCES!!!<br />";
	while ($row = mysql_fetch_assoc($query)){
		//pretty($row);
		foreach ($row as $k => $val) {echo $k."-".$val."<br />";};
		$d[] = $row;
	}
	pretty($d);
	echo json_encode($d);
?>