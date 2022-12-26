<?php
$task = 0;
// 1.
echo '<br><br>' . ++$task . '.<br><br>';
$var = 'hello';
echo $var[0] . $var[1] . $var[strlen($var) - 1];
// 2.
echo '<br><br>' . ++$task . '.<br><br>';
echo 'Количество секунд в часе = ' . 60 * 60;
// 3.
echo '<br><br>' . ++$task . '.<br><br>';
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
$var -= 1;
echo $var;
// 4.
echo '<br><br>' . ++$task . '.<br><br>';
$a = 3;
echo $a;
// 5.
echo '<br><br>' . ++$task . '.<br><br>';
$a = 10;
$b = 2;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
// 6.
echo '<br><br>' . ++$task . '.<br><br>';
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
// 7.
echo '<br><br>' . ++$task . '.<br><br>';
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;
// 8.
echo '<br><br>' . ++$task . '.<br><br>';
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
echo $result = $c + $d;
// 9.
echo '<br><br>' . ++$task . '.<br><br>';
echo $text = 'Привет, Мир!';
// 10.
echo '<br><br>' . ++$task . '.<br><br>';
echo $text1 = 'Привет, ' . $text2 = 'Мир!';
// 11.
echo '<br><br>' . ++$task . '.<br><br>';
$name = 'Артем';
echo "Привет, $name!";
// 12.
echo '<br><br>' . ++$task . '.<br><br>';
$age = 18;
echo "Мне $age лет!";
// 13.
echo '<br><br>' . ++$task . '.<br><br>';
$text = 'abcde';
echo $text[0] . $text[1] . $text[-1];
// 14.
echo '<br><br>' . ++$task . '.<br><br>';
$text[0] = '!';
echo $text;
// 15.
echo '<br><br>' . ++$task . '.<br><br>';
$num = '12345';
echo array_sum(str_split($num));
// 16.
echo '<br><br>' . ++$task . '.<br><br>';
echo 'Количество секунд в часе: ' . 60 * 60 . '<br>';
echo 'Количество секунд в сутках: ' . 60 * 60 * 24 . '<br>';
echo 'Количество секунд в месяце: ' . 60 * 60 * 24 * 30 . '<br>';
// 17.
echo '<br><br>' . ++$task . '.<br><br>';
$hour = 11;
$min = 15;
$sec = 42;
echo "$hour:$min:$sec";
// 18.
echo '<br><br>' . ++$task . '.<br><br>';
$num = 5;
echo $num * $num;
// 19.
echo '<br><br>' . ++$task . '.<br><br>';
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
// 20.
echo '<br><br>' . ++$task . '.<br><br>';
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;
// 21.
echo '<br><br>' . ++$task . '.<br><br>';
$var = 10;
$var++;
$var++;
$var--;
echo $var;
// 22.
echo '<br><br>' . ++$task . '.<br><br>';
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
