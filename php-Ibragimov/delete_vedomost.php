<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно подключиться к серверу");
$id = $_GET['id'];
$result = $mysqli->query("DELETE FROM vedomost WHERE id='$id'");
header("Location: vedomost.php");
exit;
?>
