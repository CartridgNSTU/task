<?php
	header('Content-type: text/html; charset=utf-8');
	$num = $_GET['c'];
	$result = ($num * 18/10 + 32) . 'F';
	echo $result;
?>