<HTML>
<HEAD> <TITLE> Вход </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Логин:
 <br>
 <INPUT type="text" name="a" size="5">
 <P> <INPUT type="submit" name="obr" value="Авторизоваться">
</FORM>
<?
$s1="Ibragimov";
$s2="Ivanov";
$s3="Ayupova";
$s4="Starcev";
if($_POST["a"]==$s1){
echo("Здравствуйте, Ибрагимов");
} 
elseif($_POST["a"]==$s2){
echo("Здравствуйте, Иванов");
}
elseif($_POST["a"]==$s3){
echo("Здравствуйте, Аюпова");
}
elseif($_POST["a"]==$s4){
echo("Здравствуйте, Старцев");
}
else{
print("вы не зарегестрированный пользователь!");}
?>
</BODY> </HTML>