<!-- Проверка на количество элементов в массиве
 <?php
	// $arr = [1, 2, 3, 4, 5];
    // if (count($arr) == 3){
    //    echo $res = $arr[0] + $arr[1] +$arr[2];
    // } else {
    //     if (count($arr) < 3) {
    //         echo 'В массиве меньше 3 элементов';
    //     } else {
    //         echo 'В массиве больше 3 элементов';
    //     }
    // }
?> 
-->

<!-- Проверка на равенство последнего числа
<?php
	// $str = '123450';
	// $last = $str[strlen($str) - 1];
	
	// if ($last == 0) {
	// 	echo '0';
	// }
?>
-->

<!-- Проверка четное или не четное число
<?php
	// $number = 6;
    // $res = $number % 2;
    // if ($res == 0){
    //     echo "Число $number четное";
    // } else {
    //     echo "Число $number не четное";
    // }
?>
-->

<!-- Проверка что число делится на 3
<?php
	// $number = 12;
    // $res = $number % 3;
    // if ($res == 0){
    //     echo "Число $number делится на 3";
    // } else {
    //     echo "Число $number не делится на 3";
    // }
?>
-->
<!-- Проверьте, что первым символом этой строки является буква 'a'.
<?php
    // $str = 'cabcde';
    // if ($str[0] == 'a') {
    //     echo "Первый символ строки 'a'";
    // } else {
    //     echo "FALSE";
    // }
?>
-->

<!-- Дано число, например, 12345. Проверьте, что первым символом этого числа является цифра 1, 2 или 3.
<?php
    // $str = 45;
    // $str = (string)$str;
    // if (isset($str[0]) and isset($str[1]) and isset($str[2])){
    //     if ($str[0] == 1 or $str[1] == 2 or $str[2] == 3) {
    //         echo "Первый символ строки цифра 1, 2 или 3";
    //     } 
    // } else {
    //     echo "В строке меньше 3 символов";
    // }
?> -->

<!-- Дано трехзначное число. Найдите сумму цифр этого числа.
<?php
    // $numbers = 123;
    // $numbers = (string)$numbers;
    // $res = $numbers[0] + $numbers[1] + $numbers[2];
    // echo $res;
?> -->

<!-- Дано число из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. <br>
<?php
    // $number = 871871;
    // $number = (string)$number;

    // $sum1 = $number[0] + $number[1] + $number[2];
    // $sum2 = $number[3] + $number[4] + $number[5];

    // if($sum1 == $sum2) {
    //     echo "сумма первых трех цифр равняется сумме вторых трех цифр";
    // } else {
    //     echo "сумма первых трех цифр не равняется сумме вторых трех цифр";
    // };
?>  -->

<!-- Дан массив. Выведите столбец элементов этого массива на экран.
<?php
	// $arr = ['a', 'b', 'c', 'd', 'e'];

    // foreach ($arr as $elem) {
    //     echo $elem . '<br>';
    // };
?> -->

<!-- Дан массив. Найдите сумму элементов этого массива и выведите ее на экран.
<?php
	// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // $res = 0;

    // foreach ($arr as $elem) {
    //     $res = $res + $elem;
    //     // $res += $elem;
    // }

    // echo $res;
?> -->

<!-- Дан массив. Найдите среднее арифметическое его элементов.
<?php
	// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // $res = 0;
    // $sum = count($arr);
    // foreach ($arr as $elem) {
    //     $res += $elem;
    // };

    // echo $res / $sum;
?> -->

<!-- Дан массив. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате green - зеленый.
<?php
	// $arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];

    // foreach ($arr as $key => $elem) {
    //     echo $key . '-' . $elem . '<br>';
    // };
?> -->

<!-- Дан массив. С помощью цикла foreach выведите на экран столбец строк такого формата: user1 - возраст 30 лет.
<?php
	// $arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
    // foreach ($arr as $key => $elem) {
    //     echo $key . ' - возраст ' . $elem . ' лет. <br>';
    // }
?> -->

<!-- С помощью цикла foreach и оператора if выведите в консоль нечетные элементы массива.
<?php
	// $arr = [1, 2, 3, 4, 5];
    // foreach ($arr as $elem) {
    //     if ($elem % 2 !== 0) {
    //         echo $elem . '<br>';
    //     };
    // };
?> -->

<!-- С помощью цикла foreach и оператора if выведите в консоль те элементы массива, которые больше 3-х, но меньше 10.
<?php
	// $arr = [2, 5, 9, 15, 1, 4];
    // foreach ($arr as $elem) {
    //     if ($elem > 3 and $elem < 10) {
    //         echo $elem . '<br>';
    //     }
    // }
?> -->

<!-- Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов массива.
<?php
    // $arr = [4, 5, 1, -10, 457, 345, -45, -213, 54, 6, 9, -7];
    // $res = 0;
    // foreach ($arr as $elem) {
    //     if ($elem > 0) {
    //         $res += $elem;
    //     };
    // };
    // echo $res;
?> -->

<!-- Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.
<?php
	// $arr = [10, 20, 30, 50, 235, 3000, 245, 6585, 745, 545436, 143214, 24325, 1, 2, 5, 6, 7];
    // foreach ($arr as $elem) {
    //     $elem = (string)$elem;
    //     if ($elem[0] == 1 or $elem[0] == 2 or $elem[0] == 5) {
    //         echo $elem . '<br>';
    //     }
    // }
?> -->

<!-- Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.
<?php   
    // $dayWeek = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    // foreach ($dayWeek as $key => $elem) {
    //     if ($key < 5) {
    //         echo $elem . '<br>';
    //     } else {
    //         echo '<b>' . $elem . '</b> <br>';
    //     }
    // }
?> -->

<!-- Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. 
Номер текущего дня должен храниться в переменной $day.
<?php
    // $dayWeek = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    // $day = 'Среда';
    // foreach ($dayWeek as $elem) {
    //     if ($elem !== $day) {
    //         echo $elem . '<br>';
    //     } else {
    //         echo '<b>' . $elem . '</b> <br>';
    //     }
    // }
?> -->

<!-- Выведите на экран числа от 1 до 100.
<?php
    // $i = 1;
    // while ($i <= 100) {
    //     echo $i . '<br>';
    //     $i++;
    // }
?> -->

<!-- Выведите на экран числа 11 до 33.
<?php
    // $i = 11;
    // while ($i <= 33) {
    //     echo $i . '<br>';
    //     $i++;
    // }
?> -->

<!-- Выведите на экран четные числа в промежутке от 0 до 100.
<?php
    // $i = 2;
    // while ($i <= 100) {
    //     echo $i . '<br>';
    //     $i += 2;
    // }
?> -->

<!-- Выведите на экран нечетные числа в промежутке от 1 до 99.
<?php
    // $i = 1;
    // while ($i <= 100) {
    //     echo $i . '<br>';
    //     $i += 2;
    // }
?> -->

<!-- Выведите на экран числа от 30 до 0.
<?php
    // $i = 30;
    // while ($i >= 0) {
    //     echo $i . '<br>';
    //     $i--;
    // }
?>  -->

<!-- С помощью цикла for выведите на экран числа от 1 до 100.
<?php
	// for ($i = 1; $i <= 100; $i++) {
	// 	echo $i . '<br>';
	// }
?> -->

<!-- С помощью цикла for выведите на экран числа от 11 до 33.
<?php
	// for ($i = 11; $i <= 33; $i++) {
	// 	echo $i . '<br>';
	// }
?> -->

<!-- С помощью цикла for выведите на экран четные числа в промежутке от 0 до 100.
<?php
	// for ($i = 0; $i <= 100; $i += 2) {
	// 	echo $i . '<br>';
	// }
?>  -->

<!-- С помощью цикла for выведите на экран нечетные числа в промежутке от 1 до 99.
<?php
	// for ($i = 1; $i <= 100; $i += 2) {
	// 	echo $i . '<br>';
	// }
?> -->

<!-- С помощью цикла for выведите на экран числа от 100 до 0.
<?php
	// for ($i = 100; $i >= 0; $i--) {
	// 	echo $i . '<br>';
	// }
?> -->

<!-- Найдите произведение целых чисел от 1 до 20.
<?php
	// $res = 0;
    // for ($i = 1; $i <= 20; $i++) {
    //     $res += $i;
    // }
    // echo $res . '<br>';
?> -->

<!-- Найдите сумму четных чисел от 2 до 100.
<?php
	// $res = 0;
    // for ($i = 2; $i <= 100; $i += 2) {
    //     $res += $i;
    // }
    // echo $res . '<br>';
?> -->

<!-- Найдите сумму нечетных чисел от 1 до 99.
<?php
	// $res = 0;
    // for ($i = 1; $i <= 100; $i += 2) {
    //     $res += $i;
    // }
    // echo $res . '<br>';
?>  -->

<!-- Дан массив с числами. Запустите цикл, который будет по очереди выводить элементы этого массива в консоль до тех пор, 
пока не встретится элемент со значением 0. После этого цикл должен завершить свою работу.
<?php
    // $arr = [1, 2, 3, 4, 5, 6, 345, 64, 24, 64, 672, 0, 5, 32, 54, 65, 8, 9];
    // foreach ($arr as $elem) {
    //     if ($elem == 0) {
    //         break;
    //     }
    //     echo $elem . '<br>';
    // }
?> -->

<!-- Дан массив с числами. Найдите сумму элементов, расположенных от начала массива до первого отрицательного числа.
<?php
    // $arr = [1, 2, 3, 4, 5, 6, 345, 64, 24, 64, 672, 0, -1, 5, 32, 54, 65, 8, 9];
    // $res = 0;
    // foreach ($arr as $elem) {
    //     if ($elem < 0) {
    //         break;
    //     };
    //     $res += $elem;
    // }
    // echo $res . '<br>';
?> -->

<!-- Дан массив с числами. Найдите позицию первого числа 3 в этом массиве (считаем, что это число обязательно есть в массиве). 
<?php
    // $arr = [1, 2, 33, 4, 5, 6, 345, 64, 24, 64, 672, 3, 0, -1, 5, 32, 54, 3, 65, 8, 9];
    // $position = 0;
    // foreach ($arr as $key => $elem) {
    //     if ($elem == 3) {
    //         $position = $key;
    //         break;
    //     };
    // }
    // echo $position . '<br>';
?> -->

<!-- Определите, сколько целых чисел, начиная с числа 1, нужно сложить, чтобы сумма получилась больше 100.
<?php
    // $sum = 0;
    // $count = 0;
    // while ($sum < 100) {
    //     $count++;
    //     echo $count;
    //     $sum += $count;
    //     echo $sum . '<br>';
    // }
    // echo "Для получения суммы больше 100 необходимо сложить $count чисел.";
?> -->

<!-- Проверьте, что в этом массиве есть элемент 'c'. Если есть - выведите 'да', а если нет - выведите 'нет'.
<?php
	// $arr = ['a', 'b', 'c', 'd', 'e'];
    // $flag = false;
    // foreach ($arr as $elem) {
    //     if ($elem == 'c') {
    //         $flag = true;
    //     }
    // }
    // if ($flag) {
    //     echo 'есть';
    // } else {
    //     echo 'нет';
    // }
?> -->

<!-- Дано число $num с неким начальным значением. Умножайте его на 3 столько раз, пока результат умножения не станет больше 1000. 
Какое число получится? Посчитайте количество итераций, необходимых для этого.
<?php
	// $num = 100;
	// $count = 0;
	// while ($num < 1000) {
    //     $count++;
    //     $num = $num * 3;
    //     echo $num . '<br>';
	// }
    // echo $count . ' количество итераций';
?> -->

<!-- Решите предыдущую задачу через цикл for.
<?php
    // for ($num = 100, $i = 0; $num < 1000; $num *= 3, $i++);
    // echo $i . ' количество итераций';
?> -->

<!-- С помощью цикла сформируйте строку, заполненную 5-тью нулями.
<?php
	// $str = '';
    // for ($i = 0; $i < 5; $i++) {
    //     $str = $str . 0;
    // }
    // echo $str;
?> -->

<!-- С помощью цикла сформируйте строку '123456789' и запишите ее в переменную $str. Выведите значение этой переменной на экран.
<?php
	// $str = '';
    // for ($i = 1; $i < 10; $i++) {
    //     $str = $str . $i;
    // }
    // echo $str;
?> -->

<!-- С помощью цикла сформируйте строку '987654321' и запишите ее в переменную $str. Выведите значение этой переменной на экран.
<?php
	// $str = '';
    // for ($i = 9; $i > 0; $i--) {
    //     $str = $str . $i;
    // }
    // echo $str;
?> -->

<!-- С помощью цикла сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str. Выведите значение этой переменной на экран.
<?php
	// $str = '-';
    // for ($i = 1; $i < 10; $i++) {
    //     $str = $str . $i . '-';
    // }
    // echo $str;
?> -->

<!-- С помощью двух вложенных циклов выведите на экран следующую строку:
111222333444555666777888999
<?php
	// for ($i = 1; $i <= 9; $i++) {
    //     for ($j = 1; $j <= 3; $j++) {
    //         echo $i;
    //     }
    // }
?> -->

<!-- С помощью двух вложенных циклов выведите на экран следующую строку:
11 12 13 21 22 23 31 32 33
<?php
	// for ($i = 1; $i <= 3; $i++) {
    //     for ($j = 1; $j <= 3; $j++) {
    //         echo  $i . $j . ' ';
    //     }
    // }
?> -->

<!-- Объявите пустой массив, а затем заполните его числами от 1 до 10. 
<?php
	$arr = [];
    // $arr[] = 1;
    // $arr[] = 2;
    // $arr[] = 3;
    // $arr[] = 4;
    // $arr[] = 5;
    // $arr[] = 6;
    // $arr[] = 7;
    // $arr[] = 8;
    // $arr[] = 9;
    // $arr[] = 10;
    // for ($i = 1; $i <= 10; $i++) {
    //     $arr[] = $i;
    // }
    // var_dump ($arr);
?> -->

<!-- Объявите пустой массив, а затем заполните его 5-ю буквами x.
<?php
	// $arr = [];
    // for ($i = 1; $i <= 5; $i++) {
    //     $arr[] = 'x';
    // }
    // var_dump ($arr);
?> -->

<!-- С помощью цикла заполните массив числами от 1 до 100.
<?php
	// $arr = [];
    // for ($i = 1; $i <= 100; $i++) {
    //     $arr[] = $i;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?>  -->

<!-- С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.
<?php
	// $arr = [];
    // for ($i = 1; $i <= 100; $i += 2) {
    //     $arr[] = $i;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- С помощью цикла for выведите все эти элементы на экран.
<?php
	// $arr = ['a', 'b', 'c', 'd', 'e'];
    // $length = count ($arr);
    // for ($i = 0; $i < $length; $i++){
    //     echo $arr[$i];
    // }
?> -->

<!-- С помощью цикла for выведите на экран все элементы этого массива, кроме последнего.
<?php
	// $arr = ['a', 'b', 'c', 'd', 'e'];
    // $length = count($arr) - 1;
    // for ($i = 0; $i < $length; $i++) {
    //     echo $arr[$i];
    // }
?> -->

<!-- С помощью цикла for выведите на экран первую половину элементов этого массива.
<?php
	// $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    // $length = count($arr) / 2;
    // for ($i = 0; $i < $length; $i++) {
    //     echo $arr[$i];
    // }
?> -->

<!-- Дан массив с числами. Переберите этот массив циклом и возведите каждый элемент этого массива в квадрат.
<?php
	// $arr = [1, 2, 3, 4, 5];
	// $length = count($arr);
	
    // for ($i = 0; $i < $length; $i++) {
    //     $arr[$i] = $arr[$i] * 2;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Дан массив с числами. Переберите этот массив циклом и отнимите от каждого элемента единицу.
<?php
	// $arr = [1, 2, 3, 4, 5];
	// $length = count($arr);
	
    // for ($i = 0; $i < $length; $i++) {
    //     $arr[$i] = $arr[$i] - 1;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Дан массив с числами. Переберите этот массив циклом и прибавьте к каждому элементу 10.
<?php
	// $arr = [1, 2, 3, 4, 5];
	// $length = count($arr);
	
    // for ($i = 0; $i < $length; $i++) {
    //     $arr[$i] = $arr[$i] + 10;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Дан следующий массив с работниками и их зарплатами:
Увеличьте зарплату каждого работника на 10%.
<?php
	// $arr = [
	// 	'employee1' => 100,
	// 	'employee2' => 200,
	// 	'employee3' => 300,
	// 	'employee4' => 400,
	// 	'employee5' => 500,
	// 	'employee6' => 600,
	// 	'employee7' => 700,
	// ];

    // foreach ($arr as $key => $elem) {
    //     $arr[$key] = $arr[$key] * 1.1;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только тем работникам, у которых она меньше или равна 400.
<?php
	// $arr = [
	// 	'employee1' => 100,
	// 	'employee2' => 200,
	// 	'employee3' => 300,
	// 	'employee4' => 400,
	// 	'employee5' => 500,
	// 	'employee6' => 600,
	// 	'employee7' => 700,
	// ];

    // foreach ($arr as $key => $elem) {
    //     if ($elem <= 400) {
    //     $arr[$key] = $arr[$key] * 1.1;
    //     }
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Найдите сумму ключей этого массива и поделите ее на сумму значений.
<?php
	// $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    // $sumKey = 0;
    // $sumElem = 0;

    // foreach ($arr as $key => $elem) {
    //     $sumKey += $key;
    //     $sumElem += $elem;
    // }
    // $res = $sumKey / $sumElem;
    // echo 'Сумма ключей - ' . $sumKey . '<br>' . 'Сумма элементов - ' . $sumElem . '<br>' . 'Результат деления - ' . $res;
?> -->

<!-- Запишите ключи этого массива в один массив, а значения - в другой.
<?php
	// $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    // $arrKey = [];
    // $arrElem = [];

    // foreach ($arr as $key => $elem) {
    //     $arrKey[] = $key;
    //     $arrElem[] = $elem;
    // }
    // echo '<pre>';
    // print_r($arrKey);
    // print_r($arrElem);
    // echo '</pre>';
?> -->

<!-- Запишите в новый массив элементы, значение которых начинается с цифры 1 или цифры 2. 
То есть у вас в результате получится вот такой массив:
<?php
	// $arr = [
	// 	1 => 125,
	// 	2 => 225,
	// 	3 => 128,
	// 	4 => 356,
	// 	5 => 145,
	// 	6 => 281,
	// 	7 => 452,
	// ];
    // $newArr = [];

    // foreach ($arr as $key => $elem) {
    //     if ($elem < 299) {
    //         $newArr[$key] = $elem;
    //     }
    // }
    // echo '<pre>';
    // print_r($newArr);
    // echo '</pre>';
?> -->

<!-- Выведите с помощью цикла столбец чисел от 1 до 100.
<?php
    // $i = 1;
    // while ($i <= 100) {
    //     echo $i . '<br>';
    //     $i++;
    // }
?> -->

<!-- Выведите с помощью цикла столбец чисел от 100 до 1.
<?php
    // $i = 100;
    // while ($i >= 0) {
    //     echo $i . '<br>';
    //     $i--;
    // }
?> -->

<!-- Выведите с помощью цикла столбец четных чисел от 1 до 100.
<?php
    // $i = 0;
    // while ($i <= 100) {
    //     echo $i . '<br>';
    //     $i += 2;
    // }
?> -->

<!-- Заполните массив 10-ю иксами с помощью цикла.
<?php
    // $arr = [];
    // for ($i = 0; $i < 10; $i++) {
    //     $arr[$i] = 'x';
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Заполните массив числами от 1 до 10 с помощью цикла.
<?php
    // $arr = [];
    // for ($i = 1; $i <= 10; $i++) {
    //     $arr[] = $i;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Дан массив с числами. С помощью цикла выведите только те элементы массива, которые больше нуля и меньше 10-ти.
<?php
    // $arr = [-1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 245, 42, 234, 2];
    // foreach ($arr as $elem) {
    //     if ($elem > 0 and $elem < 10) {
    //         echo $elem . ' ';
    //     }
    // }
?> -->

<!-- Дан массив с числами. С помощью цикла проверьте, что в нем есть элемент со значением 5.
<?php
    // $arr = [-1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 245, 42, 234, 2];
    // foreach ($arr as $elem) {
    //     if ($elem === 5) {
    //         echo 'В массиве есть цифра 5';
    //     }
    // }
?> -->

<!-- Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.
<?php
    // $arr = [-1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 245, 42, 234, 2];
    // $res = 0;
    // foreach ($arr as $elem) {
    //     $res = $res + $elem;
    // }
    // echo 'Сумма элементов массива: ' . $res;
?> -->

<!-- Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.
<?php
    // $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // $length = count($arr);
    // for ($i = 0; $i < $length; $i++) {
    //     $arr[$i] = $arr[$i] * 2;
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
?> -->

<!-- Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов, делить на количество).
<?php
    // $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // $sumElem = 0;
    // $length = count($arr);

    // foreach ($arr as $elem) {
    //     $sumElem += $elem;
    // }
    // $res = $sumElem / $length;
    // echo 'Количество элементов: ' . $length . '<br>';
    // echo 'Сумма элементов: '  . $sumElem . '<br>';
    // echo 'Среднее арифметическое ' . $res;
?> -->

<!-- Напишите скрипт, который будет находить факториал числа. Факториал - это произведение всех целых чисел, меньше данного, и его самого.
<?php
    // $number = 11;
    // $factorial = 1;

    // for ($i = 1; $i <= $number; $i++) {
    //     $factorial *= $i;
    // }

    // echo "Факториал числа $number равен $factorial";
?> -->

<!-- Выведите с его помощью элементы с текстом 'l', 'e', 'g' и 'a'.
<?php
	// $arr = [
	// 	['a', 'b', 'c'],
	// 	['d', 'e', 'f'],
	// 	['g', 'h', 'i'],
	// 	['j', 'k', 'l'],
	// ];
    // echo $arr[3][2] . ' ';
    // echo $arr[1][1] . ' ';
    // echo $arr[2][0] . ' ';
    // echo $arr[0][0] . ' ';
?> -->

<!-- Найдите сумму всех его элементов.
<?php
	// $arr = [
    //     [1, 2], 
    //     [3, 4], 
    //     [5, 6]
    // ];
    // $length = count($arr);
    // $sum = 0;
    // // for ($i = 0; $i < $length; $i++) {
    // //     foreach ($arr[$i] as $elem) {
    // //         $sum = $sum + $elem;
    // //     }
    // // }
    // foreach ($arr as $elem){
    //     foreach ($elem as $number){
    //         $sum = $sum + $number;
    //     }
    // }
    // echo $sum . '<br>';
?> -->

<!-- Найдите сумму всех элементов приведенного массива.
<?php
	// $arr = [
	// 	[
	// 		[1, 2],
	// 		[3, 4],
	// 	],
	// 	[
	// 		[5, 6],
	// 		[7, 8],
	// 	],
	// ];
    // $sum = 0;
    // foreach ($arr as $array1) {
    //     foreach ($array1 as $array2) {
    //         foreach ($array2 as $elem) {
    //             $sum += $elem;
    //         }
    //     }
    // }
    // echo $sum;
?> -->

<!-- Выведите с помощью этого массива имя первого мальчика и имя второй девочки.
<?php
	// $arr = [
	// 	'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
	// 	'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
	// ];
    // echo $arr['boys'][1];
    // echo $arr['girls'][2];
?> -->

<!-- Выведите с помощью этого массива английское название среды.
<?php
	// $arr = [
	// 	'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
	// 	'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
	// ];
    // echo $arr['en'][2];
?> -->

<!-- Выведите с помощью этого массива сумму зарплат первого и третьего юзера.
<?php
	// $arr = [
	// 	[
	// 		'name'   => 'user1',
	// 		'age'    => 30,
	// 		'salary' => 1000,
	// 	],
	// 	[
	// 		'name'   => 'user2',
	// 		'age'    => 31,
	// 		'salary' => 2000,
	// 	],
	// 	[
	// 		'name'   => 'user3',
	// 		'age'    => 32,
	// 		'salary' => 3000,
	// 	],
	// ];
    // echo $arr[0]['salary'];
    // echo $arr[2]['salary'];
?> -->

<!-- Найдите сумму всех элементов приведенного массива. Обращайтесь к каждому элементу по отдельности, без цикла.
<?php
	// $arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
    // $array1 = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0]  + $arr[0][3][2][1];
    // $array2 = $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
    // echo $sum = $array1 + $array2;
?> -->

<!-- С помощью двух вложенных циклов найдите сумму элементов этого массива.
<?php
	// $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
    // $sum = 0;
    // foreach ($arr as $sub) {
    //     foreach ($sub as $elem) {
    //         $sum += $elem;
    //     }
    // }
    // echo 'Сумма всех эдементов массива $arr равна  ' . $sum;
?> -->

<!-- С помощью трех вложенных циклов найдите сумму элементов этого массива.
<?php
	// $arr = [
	// 	[
	// 		[1, 2, 3],
	// 		[6, 7, 8],
	// 		[3, 8, 4],
	// 		[6, 7, 9],
	// 	],
	// 	[
	// 		[9, 1, 2],
	// 		[4, 5, 6],
	// 	],
	// 	[
	// 		[9, 1, 2],
	// 		[4, 5, 6],
	// 		[5, 6, 3],
	// 	],
	// ];
    // $sum = 0;
    // foreach ($arr as $sub) {
    //     foreach ($sub as $subsub) {
    //         foreach ($subsub as $elem) {
    //             $sum += $elem;
    //         }
    //     }
    // }
    // echo $sum;
?> -->

<!-- Выведите элементы этого массива в формате ключ-значение.
<?php
	// $arr = [
	// 	[
	// 		'name'   => 'user1',
	// 		'age'    => 30,
	// 		'salary' => 1000,
	// 	],
	// 	[
	// 		'name'   => 'user2',
	// 		'age'    => 31,
	// 		'salary' => 2000,
	// 	],
	// 	[
	// 		'name'   => 'user3',
	// 		'age'    => 32,
	// 		'salary' => 3000,
	// 	],
	// ];
    // foreach ($arr as $sub) {
    //     foreach ($sub as $key => $elem) {
    //     echo $key . ' ' . $elem . '<br>';
    //     }
    // }
?> -->

<!-- С помощью двух вложенных циклов выведите элементы этого массива в формате имя группы - имя юзера.
<?php
	// $arr = [
	// 	'group1'  => ['user11', 'user12', 'user13', 'user43'],
	// 	'group2'  => ['user21', 'user22', 'user23'],
	// 	'group3'  => ['user31', 'user32', 'user33'],
	// 	'group4'  => ['user41', 'user42', 'user43'],
	// 	'group5'  => ['user51', 'user52'],
	// ];
    // $sum = '';
    // foreach ($arr as $key => $sub) {
    //     foreach ($sub as $elem) {
    //         echo $key . ' - ' . $elem . '<br>';
    //     }
    // }
?> -->