<?php
$flowers=array(array("Название"=>"розы",
    "Цена"=>100,
    "Количество"=>15),
    array("тюльпаны", 60,25),
    array("орхидеи", 180, 7));

echo "<h1>Ручной доступ к элементам</h1>";
echo $flowers[0][0]." цена ".$flowers[0][1]." количество ".$flowers[0][2]."<br>";
echo $flowers[1][0]." цена ".$flowers[1][1]." количество ".$flowers[1][2]."<br>";
echo $flowers[2][0]." цена ".$flowers[2][1]." количество ".$flowers[2][2]."<br>";

echo "<h1>Использование циклов для вывода элементов</h1>";

echo "<ol>";
for($row=0;$row<3;$row++){
    echo "<li><b>Номер строки $row</b>";
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$flowers[$row][$col]."</li>";
    }
    echo "</ul>";
     echo "</li>";
}
echo  "</ol>";
echo "<h>Использование цикла foreach для доступа к элементам</h><br><br>";

$Flowers=array(array("Название"=>"розы",
    "Цена"=>100,
    "Количество"=>15),
    array("Название"=>"тюльпаны",
        "Цена"=>160,
        "Количество"=>25),
    array("Название"=>"орхидеи",
        "Цена"=>100,
        "Количество"=>15));
for ($row=0;$row<3;$row++){
    echo "<li><b>Номер строки $row</b>";
    echo "<ul>";
    foreach ($Flowers[$row] as $key=>$value){
        echo"<li>".$value."</li>";
            }
            echo "</ul>";
    echo "</li>";
}
?>
<br><br>

<?php
$work=[["Вася","Шофер",2500],
   [ "Петя","слесарь",2700],
   [ "Иван","механик",2900]
];
var_dump($work);

for ($r=0;$r<3;$r++){
    echo "<li><b>Номер строки $row</b>";
    echo "<ul>";
    foreach ($work[$r] as $k=>$v){
        echo"<li>".$v."</li>";
            }
            echo "</ul>";
    echo "</li>";
}

?>
<br><br>


<?php

for ($a=2; $a<=9; $a++){
    for ($b=2; $b<=9; $b++){
          $table[$a][$b]=$a*$b;
    }
}
echo "<table>";
for ($a=2; $a<=9; $a++){
    echo "<tr>";
//    echo $table[$a]."<br>";
    for ($b=2;$b<=9;$b++){
        echo"<td>".$table[$a][$b]."</td>";
    }echo "</tr>";
}
echo "</table>";
?>
