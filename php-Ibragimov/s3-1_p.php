<?php
if ($_POST["a"] > $_POST["b"]) {
 echo ("Число $_POST[a] больше");
} if ($_POST["a"] < $_POST["b"]) {
 echo ("Число $_POST[b] больше");
 }
 if ($_POST["a"] == $_POST["b"]){
  echo ("Числа $_POST[a] и $_POST[b] равны");
}
echo ("<BR> <A href='s3-1.html'> Вернуться назад </A>");
?>