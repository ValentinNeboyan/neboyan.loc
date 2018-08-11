<?php
echo 'Задача №1. Переменная test.';
//Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'.
//Проверьте работу скрипта при $a, равном 'test', 'тест', 4. (Форма GET)
?>
<br/><br/>
<form method="GET" >
    Variable a <input type="text" name="name_a">
    <input type="submit" value="Отправить">
</form>
<?php
$a=$_GET['name_a'];
if($a=='test') {
    echo 'Верно, переменная a= '.$a ;
}else{
    echo 'Нет, попытайтесь еще';
}

?>







<br/><br/>
<?php
echo 'Задача №2. Переменная';
//Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе
//поделите ее на 10. Выведите новое значение переменной на экран. (Форма GET
?>
<br/><br/>

<form method="GET" >
    Variable B <input type="text" name="name_b">
    <input type="submit" value="Отправить">
</form>
<?php
$b=$_GET['name_b'];
if($b==0 or $b==2) {
    echo $b+=7;
}else{
    echo $b/=10.;
}

?>





<br/><br/>
<?php
echo 'Задача №3. ';
//Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или
//равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите
//'Неверно'. (Форма POST)
?>
<br/><br/>

<form method="POST" >
    Variable c <input type="text" name="name_c">
    Variable d <input type="text" name="name_d">
    <input type="submit" value="Отправить">
</form>
<?php
$c=$_POST['name_c'];
$d=$_POST['name_d'];
if($c>2 and $c<11 or $d>6 and$d=6) {
    echo 'верно';
}else{
    echo 'Неверно';
}

?>







<br/><br/>
<?php
echo 'Задача №4.';
//В переменной $min лежит число от 0 до 59. Определите в какую четверть часа
//попадает это число (в первую, вторую, третью или четвертую).
//Затем переделать эту задачу считывая число из формы.
?>
<br/><br/>

<form method="GET" >
    Variable min <input type="text" name="name_min">
    <input type="submit" value="Отправить">
</form>
<?php
$min=$_GET['name_min'];
if($min<16) {
    echo 'Первая четверь часа';
}elseif ($min>15 and $min<30) {
    echo 'Вторая четверть часа';
}elseif ($min>29 and $min<45){
    echo 'Третья четверть часа';
}elseif($min>44 and $min<60){
    echo 'Четвертая четверть часа';
}


?>





<br/><br/>
<?php
echo 'Задача №5.';
//В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в
//какую пору года попадает этот месяц (зима, лето, весна, осень). Затем переделать
//эту задачу считывая число из формы
?>
<br/><br/>
<form method="GET" >
    Variable month <input type="text" name="name_month">
    <input type="submit" value="Отправить">
</form>
<?php
$month=$_GET['name_month'];
if($month<3 and $month==12) {
    echo 'Зима';
}elseif ($month>2 and $month<6) {
    echo 'Весна';
}elseif ($month>5 and $month<9){
    echo 'Лето';
}elseif($month>8 and $month<12){
    echo 'Осень';
}


?>



