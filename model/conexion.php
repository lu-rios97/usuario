<?php 
$contrasena = "KhQigSDbt6P3XXoAbc2s";
$usuario = "unas9xqhohguuxzh";
$nombre_bd = "b1ypip4enkfaqpe6zrac";

try {
	$bd = new PDO (
		'mysql:host=b1ypip4enkfaqpe6zrac-mysql.services.clever-cloud.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>