<html>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером

$id_students = $_GET['id_students'];

$fio_stud = $_GET['fio_stud'];
$fac_stud = $_GET['fac_stud'];
$group_stud = $_GET['group_stud'];
$num_stud = $_GET['num_stud'];
$tel_stud = $_GET['tel_stud'];

$zapros = "UPDATE students SET fio_stud='$fio_stud', fac_stud='$fac_stud',
group_stud='$group_stud', num_stud='$num_stud', tel_stud='$tel_stud'
WHERE id_students='$id_students'";

$result = $mysqli->query($zapros);

if ($result) {
    echo 'Все сохранено. <a href="index.php"> Вернуться к списку Студентов </a>';
} else {
    echo 'Ошибка сохранения. <a href="index.php">Вернуться к списку Студентов</a> ';
}
?>
</body>
</html>