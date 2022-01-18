<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database)
or die ("Невозможно подключиться к серверу");
$id_subject = $_GET['id_subject'];
$result = $mysqli->query("DELETE FROM subject WHERE id_subject='$id_subject'");
header("Location: subject.php");
exit;
?>
