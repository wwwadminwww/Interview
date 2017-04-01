<?php
class My{
	function __construct($param = ''){
		echo $param;
	}
	function __destruct(){
		echo '<br />I was deleted from memory and die!!!';
	}
}
$test = new My(Hello);

?>