<?php 	

	extract($_POST);
	date_default_timezone_set('Brazil/East');
	$date = date("d-m-Y");
	$minutes = date("H:i:s");
	$open = fopen("relatorio_" .$date. ".txt",'a+');
	fwrite($open,"\r\n". $minutes ." - ". $txtReport);	
	fclose($open);
	
	echo "<script>history.back(1)</script>";



 ?>