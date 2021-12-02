<title><?php echo "25 Ибрагимов Айдар ПИ-321"; ?></title>
<p> Выполнил Ибрагимов Айдар<br/> Задача№5<br/> Вариант№5<br/>
<p>
<?php
$a=rand(-10,10);
$b=rand(-10,10);
function f($u, $t) {
    if ( $u >= 0 && $t >= 0 ){
        return $u-2*$t;
    }elseif ( $u <= 0 && $t >= 0 ){
        return $u+$t;
    }elseif ($u>=0 && $t<0){
        return $u*$u-2*$t;
    }elseif ($u<0 && $t<0){
	return $u*$t+3*$t;
}
}
$Z=f($a,$b*$b-$a)+f($a,$b);
echo "a=".$a." b=".$b."<br/>";
echo "Z=".$Z;
?>

