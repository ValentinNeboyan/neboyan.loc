<html>
<body>
<?php
echo "Задача №6. Средний бал";
//Ввести оценки ученика по 5ти предметам. Посчитать средний балл и перевести его
//в словарный эквивалент. Например 0-30 – выгнать, 30-60 не зачёт, 60-74 –
//удовлетворительно, 75-89 – хорошо, 90-100 – отлично.
?>
<br/><br/>
<form method="GET" >
    Предмет 1 <input type="text" name="subject1" value="<?php echo $_GET['subject1'];?>"><br/>
    Предмет 2 <input type="text" name="subject2" value="<?php echo $_GET['subject2'];?>"><br/>
    Предмет 3 <input type="text" name="subject3" value="<?php echo $_GET['subject3'];?>"><br/>
    Предмет 4 <input type="text" name="subject4" value="<?php echo $_GET['subject4'];?>"><br/>
    Предмет 5 <input type="text" name="subject5" value="<?php echo $_GET['subject5'];?>"><br/><br/>
    <input type="submit" value="Отправить">
</form>
<?php
$score=$_GET['subject1']+$_GET['subject2']+$_GET['subject3']+$_GET['subject4']+$_GET['subject5'];
$score/=5;
if ($score<30){
    echo 'Средний бал ученика- '. $score.'. Выгнать!';
}elseif ($score>29 and $score<60){
    echo 'Средний бал ученика- '. $score.'. Не зачет!';
}elseif ($score>59 and $score<75){
    echo 'Средний бал ученика- '. $score.'. Удовлетворительно!';
}elseif ($score>74 and $score<90){
    echo 'Средний бал ученика- '. $score.'. Хорошо!';
}elseif ($score>89 and $score<101){
    echo 'Средний бал ученика- '. $score.'. Отлично!';
}
?>
<br/><br/>
<?php
echo "Задача №7. Футбол"
;//Идёт матч Англия:Бельгия. За каждый гол Англии коэффициент будет повышаться
//на 1,5, а на каждый гол Бельгии на 2,5. Если одна из команд не забила ни одного
//гола, ставить ей коэффициент разницы коэффициентов. Вычислить прибыль
//пользователя в обоих случаях при вводе указаной им суммы и счёта.
//Не совсе понял условия задачи. Поэтому решал чуть поменяв условия.
// 1)предположил,что нам известен начальнвй коффициент Допустим перед матчем Англия - Бельгия коэффициент на победу команд был 1 к 1.5.
//2) если одна из команд не забила голов, то коэф. считаю так: итоговый коэф. победившей команды минус начальный коэф. не забившей команды.

?>
<br/><br/>
<?php
echo 'Допустим перед матчем Англия - Бельгия коэффициент на победу команд был 1 к 1.5.';
?>
<br/><br/>
<form method="GET" >
    Англия <input type="text" name="goal_eng" value="<?php echo $_GET['goal_eng'];?>">
    Бельгия <input type="text" name="goal_bel" value="<?php echo $_GET['goal_bel'];?>"><br/><br/>
    Сумма ставки <input type="text" name="money" value="<?php echo $_GET['money'];?>"><br/><br/>
       <input type="submit" value="Отправить">
</form>
<?php
$koefEng=1;
$koefBel=1.5;
if($_GET['goal_eng']==0 and $_GET['goal_bel']>0) {
    $koefBel = $koefBel + $_GET['goal_bel'] * 2.5;
    $koefEng = $koefBel - 1;
    echo 'Если вы ставили на Бельгию, Ваш выигрыш ' . $_GET['money'] * $koefBel . '.<br/>';
    echo 'Если вы ставили на Англию, Ваш выигрыш ' . $_GET['money'] * $koefEng . '.';
}elseif($_GET['goal_eng']>0 and $_GET['goal_bel']==0){
        $koefEng =$koefEng + $_GET['goal_eng'] * 1.5;
    $koefBel =$koefEng-1.5;
    echo 'Если вы ставили на Бельгию, Ваш выигрыш ' . $_GET['money'] * $koefBel . '.<br/>';
    echo 'Если вы ставили на Англию, Ваш выигрыш ' . $_GET['money'] * $koefEng . '.';
}elseif($_GET['goal_eng']>0 and $_GET['goal_bel']>0){
    $koefBel = $koefBel + $_GET['goal_bel'] * 2.5;
    $koefEng = $koefEng + $_GET['goal_eng'] * 1.5;
    echo 'Если вы ставили на Бельгию, Ваш выигрыш ' . $_GET['money'] * $koefBel . '.<br/>';
    echo 'Если вы ставили на Англию, Ваш выигрыш ' . $_GET['money'] * $koefEng . '.';
}
?>
<br/><br/>
<?php
echo 'Задача №8. Угадай число';
//Угадать число от 1 до 10 которое введёт пользователь, путём деления пополам.
?>
<br/><br/>
<?php
echo 'Задача №9. Високосный год';
//В переменной $year хранится год. Определите, является ли он високосным (в таком
//году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4,
//но при этом не делится на 100, либо делится на 400.
?>
<br/><br/>

<form method="GET" >
    Введите год <input type="text" name="year" value="<?php echo $_GET['year'];?>"><br/><br/>
    <input type="submit" value="Отправить">
</form>

<?php
$koef1=$_GET['year']/400;
$koef2=$_GET['year']/4;
$koef3=$_GET['year']/100;
if ($koef1==intval($koef1) or $koef2==intval($koef2) and $koef3!=intval($koef3)){
    echo $_GET['year'].' - високосный год.';
}else {
    echo $_GET['year'].' - невисокосный год.';
}
?>
<br/><br/>
<?php
echo 'Задача №10. Диапазон чисел';
//Дано целое число, лежащее в диапазоне 1-999. Вывести его строку описание вида
//«четное двузначное число», «нечетное трехзначное число» и т. д.
?>
<br/><br/>
<form method="GET" >
    Введите число от 1 до 1000 <input type="text" name="number" value="<?php echo $_GET['number'];?>"><br/><br/>
    <input type="submit" value="Отправить">
</form>
<?php
if ($_GET['number']<100 and $_GET['number']>9 ){
    $_GET['number']/=2;
    if($_GET['number']==intval($_GET['number'])){
        echo 'Четное двузначное число';
    }else {
        echo 'Нечетное двузначное число';
    }
}elseif($_GET['number']<10) {
    $_GET['number'] /= 2;
    if ($_GET['number'] == intval($_GET['number'])) {
        echo 'Четное однозначное число';
    } else {
        echo 'Нечетное однозначное число';
    }
}elseif ($_GET['number']<1000 and $_GET['number']>99 ) {
    $_GET['number'] /= 2;
    if ($_GET['number'] == intval($_GET['number'])) {
        echo 'Четное трехзначное число';
    } else {
        echo 'Нечетное трехзначное число';
    }
}
?>
<br/><br/>
<?php
echo 'Задача №11. Умножение';
//Необходимо написать программу, которая проверяет пользователя на знание
//таблицы умножения. Пользователь сам вводит два целых однозначных числа.
//Программа задаёт вопрос: результат умножения первого числа на второе.
//Пользователь должен ввести ответ и увидеть на экране правильно он ответил или
//нет. Если нет – показать еще и правильный результат
?>
<br/><br/>

<form method="GET" >
    Введите первое число <input type="text" name="number1" value="<?php echo $_GET['number1'];?>"><br/><br/>
    Введите второе число <input type="text" name="number2" value="<?php echo $_GET['number2'];?>"><br/><br/>
    Введите ответ <input type="text" name="result" value="<?php echo $_GET['result'];?>"><br/><br/>
    <input type="submit" value="Отправить">
</form>
<?php
$result=$_GET['number1']*$_GET['number2'];
if ($result==$_GET['result']){
    echo $result.' Ваш ответ верный.';
}else{
    echo $result.' Ваш ответ неверный.';
}
?>
<br/><br/>
<?php
echo 'Задача №12. Координатная плоскость.';
//Определить четверть координатной плоскости, которой принадлежит точка.
//Координаты точки ввести с клавиатуры.
?>
<br/><br/>

<form method="GET" >
    Введите X <input type="text" name="X" value="<?php echo $_GET['X'];?>"><br/><br/>
    Введите Y <input type="text" name="Y" value="<?php echo $_GET['Y'];?>"><br/><br/>

    <input type="submit" value="Отправить"><br/><br/>

    <?php
    if($_GET['X']>0 and $_GET['Y']>0){
        echo 'Ваши координаты находятся в Первой четверти.';
    }elseif($_GET['X']<0 and $_GET['Y']>0){
        echo 'Ваши координаты находятся во Второй четверти.';
    }elseif($_GET['X']<0 and $_GET['Y']<0){
        echo 'Ваши координаты находятся в Третьей четверти.';
    }elseif($_GET['X']>0 and $_GET['Y']<0){
        echo 'Ваши координаты находятся в Четвертой четверти.';
    }
    ?>
    <br/><br/>
    <?php
    echo 'Задача №13. математические действия.';
    //Ученик вводит с клавиатуры число, символ арифметического действия (+, -, *, /) и
    //еще одно число. Компьютер должен напечатать результат.
    ?>
    <br/><br/>

    <br/><br/>
    <?php
    echo 'Задача №14. квадрат и окружность.';
    //Определить, можно ли квадрат со стороной a вписать в окружность заданного
    //радиуса R.
    ?>
    <br/><br/>

<form method="GET" >
        Введите сторону квадрата <input type="text" name="sq" value="<?php echo $_GET['sq'];?>"><br/><br/>
        Введите радиус окружности <input type="text" name="R" value="<?php echo $_GET['R'];?>"><br/><br/>

        <input type="submit" value="Отправить"><br/><br/>
        <?php
        $d_2=sqrt(2)*$_GET['sq']/2;
        if ($d_2<$_GET['R'] or $d_2==$_GET['R']){
            echo 'Квадрат с данной стороной можно вписать в окружность с таким радиусом';
        }else{
            echo 'Квадрат с данной стороной невозможно вписать в окружность с таким радиусом';
        }
        ?>
        <br/><br/>
        <?php
        echo 'Задача №15. квадрат и площадь.';
        //Даны два числа - сторона и площадь квадрата. Определить, существует ли квадрат
        //с такой стороной и площадью.
        ?>
        <br/><br/>

        <form method="GET" >
            Введите сторону квадрата <input type="text" name="sqr" value="<?php echo $_GET['sqr'];?>"><br/><br/>
            Введите площадь <input type="text" name="place" value="<?php echo $_GET['place'];?>"><br/><br/>

            <input type="submit" value="Отправить"><br/><br/>
            <?php
            $S=$_GET['sqr']*$_GET['sqr'];
            if ($S==$_GET['place']){
                echo 'Квадрат с данной стороной имеет данную площадь';
            }else{
                echo 'Квадрат с данной стороной имеет другую площадь';
            }
            ?>

            <br/><br/>
            <?php
            echo 'Задача №16. фигуры и отрезки ';
            //Даны длины четырех отрезков. Определить какой вид четырехугольника можно
            //составить из этих отрезков. В выходной поток вывести 1 если это квадрат (ромб), 2
            //если прямоугольник (параллелепипед) или 3 если произвольный четырехугольник
            //и соответственно названия фигур.
            ?>
            <br/><br/>

            <form method="GET" >
                Сторона a <input type="text" name="side_a" value="<?php echo $_GET['side_a'];?>"><br/>
                Сторона b <input type="text" name="side_b" value="<?php echo $_GET['side_b'];?>"><br/>
                Сторона c <input type="text" name="side_c" value="<?php echo $_GET['side_c'];?>"><br/>
                Сторона d <input type="text" name="side_d" value="<?php echo $_GET['side_d'];?>"><br/>

                <input type="submit" value="Отправить">
            </form>
            <?php
            if($_GET['side_a']==$_GET['side_b']and $_GET['side_c']==$_GET['side_d'] and $_GET['side_a']==$_GET['side_c']){
                echo '1. Ваша фигура квадрат или ромб';
            }elseif ($_GET['side_a']==$_GET['side_b'] and $_GET['side_c']==$_GET['side_d']and $_GET['side_a']!=$_GET['side_c']
            or $_GET['side_a']==$_GET['side_c']and $_GET['side_b']==$_GET['side_b']and $_GET['side_a']!=$_GET['side_b']
            or $_GET['side_a']==$_GET['side_d']and $_GET['side_b']==$_GET['side_c']and $_GET['side_a']!=$_GET['side_b']){
                echo '2. Ваша фигура параллелепипед';
            }else echo '3. Ваша фигура обычный четырехугольник'
            ?>
</body>
</html>