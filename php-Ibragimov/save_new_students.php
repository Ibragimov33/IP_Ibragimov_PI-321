<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysql_connect_error());
    exit();
}

mysqli_query($link, "INSERT INTO students SET fio_stud='" . $_GET['fio_stud']
    . "', fac_stud='" . $_GET['fac_stud'] . "', group_stud='"
    . $_GET['group_stud'] . "', num_stud='" . $_GET['num_stud'] .
    "', tel_stud='" . $_GET['tel_stud'] . "'");
if (mysqli_affected_rows($link) > 0)
{
    print "<p>Спасибо, Студент добавлен в базу данных.";
    print "<p><a href=\"index.php\"> Вернуться к списку Студентов </a>";
} else {
    print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку Студентов </a>";
    mysqli_close($link);
}
?>
