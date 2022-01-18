<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
}

$date_vedom = $_GET['date_vedom'];
$id_students = $_GET['id_students'];
$id_subject = $_GET['id_subject'];
$value = $_GET['value'];

// Выполнение запроса
$result = $mysqli->query("INSERT INTO vedomost SET date_vedom='$date_vedom', id_students='$id_students', id_subject='$id_subject', value='$value'");

if ($result) {
    print "<p>Внесение данных прошло успешно!";
    print "<p><a href='vedomost.php'> Вернуться к списку </a>";
} else {
    print "Ошибка сохранения <a href='vedomost.php'> Вернуться к списку </a>";
}

?>