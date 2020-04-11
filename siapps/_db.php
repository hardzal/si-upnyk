<?php

$type = "mysql";

$host = "localhost";

$user = "siupnyk1_siapps";

$pass = "adminsiapps";

$db = "siupnyk1_siapps";

$conn = mysql_connect($host,$user,$pass);

if (!$conn) {

  die('Username Atau Password Anda Salah : ' . mysql_error());

}

mysql_select_db($db, $conn);

?>