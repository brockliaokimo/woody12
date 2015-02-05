<?php
/*$servidor=""10.224.41.42";
$usuario="root";
$clave="123";
$bd="test";

mysql_connect("$servidor","$usuario","$clave")
mysql_select_db("$bd");*/
$host="localhost";
$username="root";
$pass="123";
$dbase="test";

$con = mysql_connect($host, $username, $pass) or die("Khong the ket noi csdl!");
mysql_select_db($dbase, $con) or die("Sai database");
mysql_query("SET NAMES utf8");
//mysql_query("SET NAMES 'utf8'");
?>