<?php
	header('Content-type: text/html; charset=utf-8');
	$num = $_GET['f'];
	$result = 1;
	for ($s=$num; $s>=1; $s--) {    
  		$result = $result * $s;  
	};
	echo $result;
?>