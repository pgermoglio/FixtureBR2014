<?php
header('Content-type: application/json');
$con = mysql_connect("rsb21.rhostbh.com","bilaupag_fixture","MfxtrBR2014") or die("Sin conexion");
$database = "bilaupag_br2014";
mysql_select_db($database, $con);
$sql="SELECT num,tipo,code FROM bilaupag_br2014.datos WHERE num > 0 ORDER by tipo,num";
$datos=array();
$result =  mysql_query($sql) or die ("Query error: " . mysql_error());
while($row = mysql_fetch_object($result)){
	$datos[] = $row;
	}
	mysql_close($con);
	echo json_encode($datos);
	?>
 
