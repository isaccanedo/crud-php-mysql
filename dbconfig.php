<?php

/**
 * @autor Isac Canedo
 */

$host = "LOCALHOST";
$user = "R@@T";
$password = "R@@T";
$datbase = "DATABASE";
$conn = mysql_connect($host,$user,$password) or die ("Server offline");
$db = mysql_select_db($datbase, $conn) or die ("Server offline");
?>



