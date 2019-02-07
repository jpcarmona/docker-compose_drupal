<?php
$host = 'mysql';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    echo 'ERROR!'.PHP_EOL;
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
} else {
	echo 'Funciona conexion basedato!'.PHP_EOL;
}

?>
