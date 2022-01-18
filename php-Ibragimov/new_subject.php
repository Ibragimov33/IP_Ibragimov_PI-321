<html>
<head><title> Добавление нового Предмета </title></head>
<body>
<H2>Добавление нового Предмета:</H2>
<form action="save_new_subject.php" method="get">
    Предмет: <input name="name_subject" size="50" type="text">
    <br>ФИО преподавателя: <input name="fio_subject" size="50" type="text">
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
    <a href="subject.php"> Вернуться к списку Предмета </a>
</body>
</html>
