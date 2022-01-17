<HTML>
<HEAD> <TITLE> Вход </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <h3>Анкета "Ваш характер"</h3>
 Введите Ваше Имя:
 <br><br>
 <INPUT type="text" name="a" size="20">
 <br>
 <h4>Ответье да или нет на следующие вопросы:</h4>
 1. Считаете ли Вы, что у многих ваших знакомых хороший характер? 
 <br>
 <INPUT type="radio" name="b" value="1" checked>да 
 <INPUT type="radio" name="b" value="0">нет
 <br>
 2. Раздражают ли Вас мелкие повседневные обязанности? 
 <br>
 <INPUT type="radio" name="c" value="1" checked>да 
 <INPUT type="radio" name="c" value="0">нет 
 <br>
 3. Верите ли Вы, что ваши друзья преданы Вам?
 <br>
 <INPUT type="radio" name="d" value="1" checked>да 
 <INPUT type="radio" name="d" value="0">нет 
 <br>
 4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? 
 <br>
 <INPUT type="radio" name="i" value="1" checked>да 
 <INPUT type="radio" name="i" value="0">нет 
 <br>
 5. Способны ли Вы ударить собаку или кошку? 
 <br>
 <INPUT type="radio" name="f" value="1" checked>да 
 <INPUT type="radio" name="f" value="0">нет 
 <br>
 6. Часто ли Вы принимаете лекарства? 
 <br>
 <INPUT type="radio" name="g" value="1" checked>да 
 <INPUT type="radio" name="g" value="0">нет 
 <br>
 7. Часто ли Вы меняете магазин, в который ходите за продуктами? 
 <br>
 <INPUT type="radio" name="q" value="1" checked>да 
 <INPUT type="radio" name="q" value="0">нет 
 <br>
 8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?
 <br>
 <INPUT type="radio" name="e" value="1" checked>да 
 <INPUT type="radio" name="e" value="0">нет 
 <br>
 9. Тяготят ли Вас общественные обязанности? 
 <br>
 <INPUT type="radio" name="h" value="1" checked>да 
 <INPUT type="radio" name="h" value="0">нет 
 <br>
 10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? 
 <br>
 <INPUT type="radio" name="r" value="1" checked>да 
 <INPUT type="radio" name="r" value="0">нет 
 <br>
 11. Часто ли Вам приходят в голову мысли о Вашей невезучести? 
 <br>
 <INPUT type="radio" name="t" value="1" checked>да 
 <INPUT type="radio" name="t" value="0">нет 
 <br>
 12. Сохранилась ли у Вас фигура по сравнению с прошлым? 
 <br>
 <INPUT type="radio" name="y" value="1" checked>да 
 <INPUT type="radio" name="y" value="0">нет 
 <br>
 13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? 
 <br>
 <INPUT type="radio" name="u" value="1" checked>да 
 <INPUT type="radio" name="u" value="0">нет 
 <br>
 14. Нравится ли Вам семейная жизнь? 
 <br>
 <INPUT type="radio" name="o" value="1" checked>да 
 <INPUT type="radio" name="o" value="0">нет 
 <br>
 15. Злопамятны ли Вы?
 <br>
 <INPUT type="radio" name="z" value="1" checked>да 
 <INPUT type="radio" name="z" value="0">нет 
 <br>
 16. Находите ли Вы, что стоит погода, типичная для данного времени года? 
 <br>
 <INPUT type="radio" name="x" value="1" checked>да 
 <INPUT type="radio" name="x" value="0">нет 
 <br>
 17. Случается ли Вам с утра быть в плохом настроении? 
 <br>
 <INPUT type="radio" name="m" value="1" checked>да 
 <INPUT type="radio" name="m" value="0">нет 
 <br> 
 18. Раздражает ли Вас современная живопись? 
 <br>
 <INPUT type="radio" name="w" value="1" checked>да 
 <INPUT type="radio" name="w" value="0">нет 
 <br>
 19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?
 <br>
 <INPUT type="radio" name="p" value="1" checked>да 
 <INPUT type="radio" name="p" value="0">нет 
 <br>
 20. Надоедает ли Вам делать лабораторные по PHP?
 <br>
 <INPUT type="radio" name="s" value="1" checked>да 
 <INPUT type="radio" name="s" value="0">нет 
 <P> <INPUT type="submit" name="obr" value="Ввести">
</FORM>
<?php
$s=0;
if ($_POST["d"]==1){$s++;}
if ($_POST["h"]==1){$s++;}
if ($_POST["r"]==1){$s++;}
if ($_POST["u"]==1){$s++;}
if ($_POST["o"]==1){$s++;}
if ($_POST["p"]==1){$s++;}
if ($_POST["b"]==0){$s++;}
if ($_POST["c"]==0){$s++;}
if ($_POST["i"]==0){$s++;}
if ($_POST["f"]==0){$s++;}
if ($_POST["g"]==0){$s++;}
if ($_POST["q"]==0){$s++;}
if ($_POST["e"]==0){$s++;}
if ($_POST["y"]==0){$s++;}
if ($_POST["z"]==0){$s++;}
if ($_POST["x"]==0){$s++;}
if ($_POST["m"]==0){$s++;}
if ($_POST["w"]==0){$s++;}
if ($_POST["s"]==0){$s++;}
if($s>15){echo($_POST[a] . " " . "У Вас покладистый характер");}
if($s>8 && $s<15){echo($_POST[a] . " " . "Вы не лишены недостатков, но с вами можно ладить");}
if($s<8){echo($_POST[a] . " " ."Вашим друзьям можно посочувствовать");}
?>
</BODY> </HTML>