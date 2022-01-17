<HTML>
<HEAD> <TITLE> Калькулятор </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Калькулятор:
 <br>
 <INPUT type="text" name="a" size="3">
 <INPUT type="text" name="b" size="3">
 <P> Действие: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
 <OPTION VALUE="4"> разделить 
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вперед">
</FORM>
<?php

switch ($_POST["z"]) {
 case 1:
 $s1=$_POST["a"]+$_POST["b"];
 echo($s1);
 break;
 case 2:
 $s1=$_POST["a"]-$_POST["b"];
 echo($s1);
 break;
 case 3:
 $s1=$_POST["a"]*$_POST["b"];
 echo($s1);
 break;
 case 4:
if ($_POST["b"]==0){
echo("На ноль делить нельзя");
}
else{ $s1=$_POST["a"]/$_POST["b"];
 echo($s1);
 break;}
}

?>
</BODY> </HTML>