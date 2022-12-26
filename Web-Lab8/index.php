<?php
//	1.
//	Автор: Ким Артем
/*	Дата выполнения:
	Начало: 22.10.2022
	Конец: */
echo "Приветствие!", PHP_EOL;

//	2.
$tvChannel;		//	название телеканала
$manAdress;		//	адрес производителя
$carColor;		//	цвет автомобиля
$waterTemp;		//	температура воды
$phoneModel;	//	модель телефона

//	3.
$three = 3;
$five = 5;
$eight = 8;
echo "$three, $five, $eight", PHP_EOL;
$sum = $three + $five + $eight;
echo $result = 2 + 6 + 2 / 5 - 1, PHP_EOL;

//	4.
$a = 1;
$b = 2;
echo "$a, $b", PHP_EOL;
$c = $a;
$d = $b;
echo "$c, $d", PHP_EOL;
$a = 3;
$b = 4;
echo "$a, $b, $c, $d", PHP_EOL;

// 5.
define("const1", 41);
define("const2", 33);
echo const1 + const2, PHP_EOL;
//define("const2", 33); //	Duplicate symbol declaration 'const2'

//	6.
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;
var_dump($a, $b, $c, $d, $e, $f, $g);

//	7.
echo "\$a = $a, \$b = $b", PHP_EOL;

//	8.
$first = "Доброе утро";
$second = "дамы";
$third = "и господа";
echo $first . " " . $second . " " . $third, PHP_EOL;

// 9.
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 9, 10];
$arr1["element"] = 25;
unset($arr2[0]);
echo $arr1[2], $arr2[2], PHP_EOL;
var_dump($arr1, $arr2);
echo count($arr1), count($arr2), PHP_EOL;

//	10.
define("N", 5);

for ($i = 0; $i < N; $i++) {
	echo random_int(-21, 35), PHP_EOL;
}

//	11.
$sum = 0;
for ($i = 0; $i < N; $i++) {
	$sum += random_int(-21, 35);
}
echo $sum, PHP_EOL;

// 12.
for ($i = 0, $last = null; $i < N; $i++) {
	$num = random_int(-21, 35);
	echo $num, PHP_EOL;
	if ($last)
		if ($num > $last)
			echo "Больше предыдущего", PHP_EOL;
		else if ($num < $last)
			echo "Меньше предыдущего", PHP_EOL;
		else
			echo "Равны", PHP_EOL;
	$last = $num;
}

//	13.
function Fibb($n)
{
	if ($n <= 1) return 0;

	if ($n == 2) return 1;

	return Fibb($n - 1) + Fibb($n - 2);
}

echo N, " число Фибоначчи = ", Fibb(N), PHP_EOL;

//	14.
$number = 12345;
do {
	echo $number % 10;
	$number = ($number - $number % 10) / 10;
} while ($number > 0);
echo PHP_EOL;

//	15.
$number = 12345;
$hasOdds = false;
do {
	$num = $number % 10;
	if ($num % 2 != 0) {
		$hasOdds = true;
		echo $num;
	}
	$number = ($number - $number % 10) / 10;
} while ($number > 0);
if (!$hasOdds) echo "Нечетных цифр не обнаружено!";
echo PHP_EOL;

//	16.
for ($i = 0; $i < 7; $i++) {
	$arr[$i] = random_int(-10, 10);
}
for ($i = 0; $i < 7; $i++) {
	echo $arr[$i], " ";
}
echo PHP_EOL;

//	17.
$m = 5;
$n = 5;
for ($i = 0; $i < $m; $i++) {
	$arr[$i] = [];
	for ($j = 0; $j < $n; $j++) {
		$arr[$i][$j] = random_int(-10, 10);
	}
}
echo PHP_EOL;
for ($i = 0; $i < $m; $i++) {
	for ($j = 0; $j < $n; $j++) {
		echo str_pad($arr[$i][$j], 4, " ", STR_PAD_LEFT);
	}
	echo PHP_EOL;
}

//	18.
$N = 20;
for ($i = 1; $i <= $N; $i++) {
	$arr[$i - 1] = $i;
}
//	1)
for ($i = 0, $j = 0, $k = 1; $i < $N; $i++) {
	echo $arr[$i], " ";
	if (++$j >= $k) {
		echo PHP_EOL;
		$j = 0;
		$k++;
	}
}
echo PHP_EOL;
//	2)
for ($i = 1, $j = 0, $k = 1; $i <= $N; $i++) {
	echo $i, " ";
	if (++$j >= $k) {
		echo PHP_EOL;
		$j = 0;
		$k++;
	}
}
echo PHP_EOL;

//	19.
echo max($arr), PHP_EOL;

//	20.
echo min($arr), PHP_EOL;

//	21.
$arr1 = [];
$arr2 = [];

for ($i = 0; $i < 20; $i++) {
	$arr1[$i] = $arr2[$i] = random_int(-10, 10);
}
for ($i = 2, $j = 1; $i < 20; $i += 3, $j += 2) {
	if ($arr1[$i] > $arr2[$j])
		echo "$arr1[$i] больше $arr2[$j]", PHP_EOL;
	else if ($arr1[$i] < $arr2[$j])
		echo "$arr1[$i] меньше $arr2[$j]", PHP_EOL;
	else
		echo "$arr1[$i] и $arr2[$j] равны", PHP_EOL;
}

//	22.
function func($arr)
{
	foreach ($arr as $num) {
		switch ($num) {
			case 5:
				$res = "пять";
				break;
			case 6:
				$res = "шесть";
				break;
			case 7:
				$res = 7;
				break;
			default:
				$res = "какое-то другое число";
				break;
		}

		echo $res, PHP_EOL;
	}
}

// 23.
$a = [];
for ($i = 0; $i < 10; $i++) {
	$a[$i] = random_int(1, 20);
}
$b = [12, 5, 17, 6, 4];

//	1)
$counter = [];
for ($i = 0; $i < count($b); $i++) {
	$counter[$b[$i]] = 1;
}
for ($i = 0; $i < 10; $i++) {
	if (empty($counter[$a[$i]])) echo $a[$i], " ";
}
echo PHP_EOL;
//	2)
for ($i = 0; $i < 10; $i++) {
	if (!in_array($a[$i], $b)) echo $a[$i], " ";
}
