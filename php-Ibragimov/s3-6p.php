<?php
$text=$_POST['a'];
$a=$_POST['b'];
$b=$_POST['c'];
$st=$_POST['d'];
echo("Исходный текст:" . " " . $text);
echo ("<br>");
$str=mb_strtoupper($text, 'UTF-8');
echo ("Строчные заменили на заглавные:" . " " . $str);
echo ("<br>");
echo ("Символ " . $a . " " .  "встречается " .  mb_substr_count($text,$a) . " раз");
echo ("<br>");
echo ("Символ " . $b . " " .  "встречается " .  mb_substr_count($text,$b) . " раз");
$result = preg_replace("/\s+/", " ", $st);
echo ("<br>");
echo($st);
echo ("<br>");
function mb_strrev($string)
{
    $string = strrev(mb_convert_encoding($string, 'UTF-16BE', 'UTF-8'));
    return mb_convert_encoding($string, 'UTF-8', 'UTF-16LE');
}

echo mb_strrev($st);
?>