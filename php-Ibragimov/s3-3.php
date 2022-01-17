<HTML>
<HEAD> <TITLE> Делители </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Число:
 <br>
 <INPUT type="text" name="a" size="3">
 <P> Возможные делители: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> четные делители
 <OPTION VALUE="2"> нечетные делители
 <OPTION VALUE="3"> простые делители
 <OPTION VALUE="4"> составные делители
 <OPTION VALUE="5"> все делители
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вперед">
</FORM>
<?php
function isPrime ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}
switch ($_POST["z"]) {
 case 1:
 for ($i=2;$i<=$_POST["a"];$i=$i+2) {
 if (($_POST["a"] % $i) == 0) {echo( $i."<br>");}}
 break;
 case 2:
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
 if (($_POST["a"] % $i) == 0) {echo( $i."<br>");}}
 break;
 case 3:
 for ($i=1;$i<=$_POST["a"];$i=$i+1) {
 if (($_POST["a"] % $i) == 0 && isPrime($i)) {echo ($i."<br>");}}
 break;
 case 4:
 for ($i=2;$i<=$_POST["a"];$i=$i+1) {
 if (($_POST["a"] % $i) == 0 && !isPrime($i)) {echo ($i."<br>");}}
 break;
 case 5:
 for ($i=1; $i<=$_POST["a"]; $i++){  
 if ($_POST["a"] % $i==0){      
  echo ($i."<br>");}}
 break;
}
?>
</BODY> </HTML>