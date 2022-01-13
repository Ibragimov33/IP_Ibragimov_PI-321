<?
$text=$_POST[a];
$a=$_POST[b];
$b=$_POST[c];
$k0=0;
$k1=0;
$subject = str_split($text);
$ln=count($subject);
$st=$_POST[d];
echo("Введенный текст:");
echo("<br>");
echo($text);
for($i=0;$i<=$ln;$i++){
if($subject[$i]== $a){$k0++;}}
for($i=0;$i<=$ln;$i++){
if($subject[$i]==$b){$k1++;}}
echo("<br>");
echo("Букв " . "$a" . " :". " " . "$k0");
echo("<br>");
echo("Букв " . "$b" .  " :" . " " ."$k1");
echo("<br>");
for($i=0;$i<=$ln;$i++){
 if ($subject[$i+1] == $a){
   if($subject[$i] ==$b){
   unset($subject[$i]);
  }
 }
}
echo("<br>");
echo("Измененная строка:");
echo("<br>");
 for ($i = strlen($st) - 1; $i >= 0; $i--) {
       $st .= $st[$i];
       $st[$i] = NULL;
       $j++;
    }
    echo "$st";
echo("<br>");
echo("<br>");
echo("Изменили регистр букв:");
echo("<br>");
$reg=mb_strtoupper($text); 
echo($reg);
?>