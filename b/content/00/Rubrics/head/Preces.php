<?php
	if(array_key_exists('O',$_GET))
		$O = $_GET['O'];
	else $O = 0;

	head('Preces','Prayers',($O+$link>0?'2':'3'));
?>

