<?php
function myName($name){
    echo "Мы находимся в аудитории $name<br>";
}
echo "Привет всем!<br>";
myName("Занятия по PHP!");
myName("Занятия по WEB дизайну!");
echo "Рады видеть вас <br>";

?>
<br><br>
<?php
function recursion($a)
{
    if($a<20){
        echo "$a/n<br>";
        recursion($a+1);
    }
}
recursion(2);
?>