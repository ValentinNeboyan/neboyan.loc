<?php
echo 'Массивы';
?>
<br><br>
<?php
$weekdays=array(
'Понедельник',
'Вторник',
'Среда',
'Четверг',
'Пятница',
'Суббота',
'воскресенье');

var_dump($weekdays);

print_r($weekdays);
?>
<br><br>
<?php
$str="Hello Friend";
$arr1=str_split($str);
$arr2=str_split($str,3);

print_r($arr1);
print_r($arr2);
?>
<br><br>

<?php
$array=array('lastname','email','phone') ;
$comma_separated=implode(",",$array);
echo $comma_separated;
?>

<br><br>

<?php
$array=array('lastname','email','phone') ;
$comma_separated=implode("",$array);
echo $comma_separated;
?>

    <br><br>

<?php
$array=array('lastname','email','phone') ;
$comma_separated=implode("***",$array);
echo $comma_separated;
?>
<br><br>

<?php
$pizza="piece1 piece2 piece3 peice4 piece5 piece6";
$pieces=explode(" ",$pizza);
echo $pieces[0];
echo $pieces[1];
?>

<br><br>
<?php
echo rand(-40, 19).'<br>';
echo 1-rand()/rand();
?>
<br><br>



<?php
$my_array=['Солнце'=>'яркое',
           'колесо'=>'круглое',
    10=>'дом',
    -5=>290];

print_r( $my_array);
?>

<br><br>

<?php
$my_arr=array(10,15,20);
$my_arr[0]='blabla';
unset($my_arr[1]);
var_dump($my_arr);

unset($my_arr);
var_dump($my_arr);
?>

<br><br>

<?php
$my_arr1=array(1,2,3,4,5);
foreach($my_arr1 as $value){
    echo $value, "";
}
echo '<br>';
$my_arr1=array(1,2,3,4,5);
foreach($my_arr1 as$key=> $value) {
    echo "[$key]=> ", $value, "<br>";
}
?>
<br><br>

<?php
$numbers=array(1,2,3,4,5);
foreach ($numbers as &$num){
    echo $num, " ";
}
unset($num);
$num='100';
echo '<br>';

foreach ($numbers as &$num){
    echo $num, " ";
}
?>
<br>
<?php
$a=4;
$arr2=[];
for ($i=0; $i<=10; $i++){
    $arr2[]=rand(-3, 10);

}
var_dump($arr2);

foreach ($arr2 as $key=> $value){
    if ($value==$a){
        echo "<br>[$key]= ", $value;
        break;
    }
}
?>


