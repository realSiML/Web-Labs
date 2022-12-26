<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type: text/plain" content="text/html;charset=ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web-Lab9</title>
</head>

<body>
  <!-- 1 -->
  <p>1. По заходу на страницу выведите сколько дней осталось до нового года.</p>
  <?php
  $today = date_create();
  $nextYear = date_format($today, "Y") + 1;
  $nyDate = date_create("$nextYear-01-01");
  $dateDiff = date_diff($today, $nyDate);
  echo "Дней до Нового года: $dateDiff->days";
  ?>
  <!-- 2 -->
  <p>2. Дан инпут и кнопка. В этот инпут вводится год.
    По нажатию на кнопку выведите на экран,високосный он или нет.</p>
  <form action="" method="POST">
    <label>Год:</label>
    <input type="text" name="task2">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task2"])) {
    $year = $_POST["task2"];
    echo "$year - ", date("L", strtotime("$year-01-01")) ? "Високосный" : "Невисокосный";
  }
  ?>
  <!-- 3 -->
  <p>3. Дан инпут и кнопка. В этот инпут вводится дата в формате "01.12.1990".
    По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, "воскресенье".</p>
  <form action="" method="post">
    <label>Дата:</label>
    <input type="date" name="task3">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task3"])) {
    $days = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
    $date = strtotime($_POST["task3"]);
    $day = date("N", $date);
    echo $days[$day - 1];
  }
  ?>
  <!-- 4 -->
  <p>4. По заходу на страницу выведите текущую дату в формате "12 мая 2015 года,
    воскресенье".</p>
  <?php
  echo date("jS \of F Y\, l");
  ?>
  <!-- 5 -->
  <p>5. Дан инпут и кнопка. В этот инпут вводится дата рождения в формате "01.12.1990". По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя.</p>
  <form action="" method="post">
    <label>День рождения:</label>
    <input type="date" name="task5">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task5"])) {
    $date = strtotime($_POST["task5"]);
    $day = date("d", $date);
    $month = date("m", $date);
    $year = date("Y") + 1;
    echo "Дней до дня рождения: " . date_diff(date_create(), date_create("$day-$month-$year"))->days;
  }
  ?>
  <!-- 6 -->
  <p>6. По заходу на страницу выведите сколько дней осталось до ближайшей масленницы (последнее воскресенье весны).</p>
  <?php
  $today = date_create();
  $date = date_create("last Sunday of February");
  if ($today > $date) $date = date_create("last Sunday of February next year");
  echo "Дней до Масленицы: " . date_diff($today, $date)->days;
  ?>
  <!-- 7 -->
  <p>7. Дан инпут и кнопка. В этот инпут вводится дата рождения в формате "31.12". По нажатию на кнопку выведите знак зодиака пользователя.</p>
  <form action="" method="post">
    <label>Дата рождения(ДД.ММ):</label>
    <input type="text" name="task7">
    <input type="submit" value="submit">
  </form>
  <?php
  include_once "horoscope.php";

  if (isset($_POST["task7"])) {
    $str = $_POST["task7"];
    $date = explode(".", $str);
    $sum = $date[0] + $date[1] * 100;
    $zodiacSign = GetZodiacSign($sum);
    echo "Знак зодиака: " . $zodiacSign;
  }
  ?>
  <!-- 8 -->
  <p>8. Дан массив праздников. По заходу на страницу, если сегодня праздник, то поздравьте пользователя с этим праздником.</p>
  <?php
  // Заполняем массив.
  $newYear = date("12-31");
  $hallowen = date("10-31");
  $christmas = date("01-07");
  $azerConstitute = date("11-12");
  $holidays = [
    $newYear => "Новый год",
    $hallowen => "Хэллоуин",
    $christmas => "Рождество Христово",
    $azerConstitute => "День Конституции Азербайджанской Республики"
  ];
  // Вывод.
  $today = date("m-d");
  foreach ($holidays as $key => $value) {
    if ($today == $key) {
      $output = "Поздравляем с праздником: $value!";
      break;
    }
    $output = "Сегодня нет никакого праздника";
  }
  echo $output;
  ?>
  <!-- 9 -->
  <p>9. Сделайте скрипт-гороскоп. Внутри него хранится массив гороскопов на несколько дней вперед для каждого знака зодиака. По заходу на страницу спросите у пользователя дату рождения, определите его знак зодиака и выведите предсказание для этого знака зодиака на текущий день.</p>
  <?php
  if (isset($_POST["task7"])) {
    echo "Знак зодиака: $zodiacSign.<br> Ваш гороскоп на сегодня:<br>" . GetHoroscopeFor($zodiacSign);
  }
  ?>
  <!-- 10 -->
  <p>10. Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов в тексте, количество символов в тексте, количество символов за вычетом пробелов.</p>
  <form action="" method="post">
    <textarea name="task10"></textarea>
    <input type="submit" value="sumbit">
  </form>
  <?php
  if (isset($_POST["task10"])) {
    $text = $_POST["task10"];
    $alphabet = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя";
    echo "Количество слов: " . str_word_count($text, 0, $alphabet) . "<br>";
    echo "Количество символов: " . iconv_strlen($text) . "<br>";
    echo "Количество символов за вычетом пробелов: " . iconv_strlen($text)  - substr_count($text, " ") . "<br>";
  }
  ?>
  <!-- 11 -->
  <p>11. Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.</p>
  <form action="" method="post">
    <textarea name="task11"></textarea>
    <input type="submit" value="sumbit">
  </form>
  <?php
  if (isset($_POST["task11"])) {
    $text = $_POST["task11"];
    $len = mb_strlen($text);
    $chars_count = array_count_values(mb_str_split($text));
    foreach ($chars_count as $char => $count) {
      echo "$char - " . round($count / $len * 100, 0, PHP_ROUND_HALF_EVEN) . "%<br>";
    }
  }
  ?>
  <!-- 12 -->
  <p>12. Дан массив слов, инпут и кнопка. В инпут вводится набор букв. По нажатию на кнопку выведите на экран те слова, которые содержат в себе все введенные буквы.</p>
  <form action="" method="post">
    <label>Набор букв:</label>
    <input type="text" name="task12">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task12"])) {
    $letters = mb_str_split($_POST["task12"]);
    $words = ["папа", "мама", "брат", "сестра", "малыш", "машина", "карета", "утро", "день", "вечер", "ночь", "обед", "сегодня", "завтра", "весело", "хорошо", "да", "нет", "один", "два", "три"];
    $result = [];
    foreach ($words as $word) {
      $inString = true;
      foreach ($letters as $letter) {
        if (mb_stripos($word, $letter) === false) {
          $inString = false;
          break;
        }
      }
      if ($inString) array_push($result, $word);
    }

    echo "Слова, которые содержат все введенные буквы:<br>";
    for ($i = count($result) - 1; $i >= 0; $i--) {
      echo $result[$i];
      if ($i > 0) echo ", ";
    }
  }
  ?>
  <!-- 13 -->
  <p>13. Дан текстареа и кнопка. В текстареа через пробел вводятся слова. По нажатию на кнопку выведите слова в таком виде: сначала заголовок "слова на букву а" и под ним все слова, которые начинаются на "а", потом заголовок "слова на букву б" и все слова на "б" и так далее. Буквы должны идти в алфавитном порядке. Брать следует только те буквы, на которые начинаются наши слова. То есть: если нет слов, к примеру, на букву "в" - такого заголовка тоже не будет.</p>
  <form action="" method="post">
    <textarea name="task13"></textarea>
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task13"])) {
    $words = explode(" ", $_POST["task13"]);
    sort($words);
    $prev = "";
    foreach ($words as $word) {
      $char = mb_str_split($word)[0];
      if ($prev !== $char)
        echo "<br>Слова на букву " . $char . ": ";
      else
        echo ", ";
      echo $word;
      $prev = $char;
    }
  }
  ?>
  <!-- 14 -->
  <p>14. Дан инпут и кнопка. В этот инпут вводится строка на русском языке. По нажатию на кнопку выведите на экран транслит этой строки.</p>
  <form action="" method="post">
    <label>Строка на русском:</label>
    <input type="text" name="task14">
    <input type="submit" value="submit">
  </form>
  <?php
  include_once "translit.php";

  if (isset($_POST["task14"])) {
    echo "Транслит: " . RusToLat($_POST["task14"]);
  }
  ?>
  <!-- 15 -->
  <p>15. Дан инпут, 2 радиокнопочки и кнопка. В инпут вводится строка, а с помощью радиокнопочек выбирается - нужно преобразовать эту строку в транслит или из транслита обратно.</p>
  <form action="" method="get">
    <input type="text" name="task15">
    <input type="submit" value="submit"><br>
    <input type="radio" name="radio15" value="To" checked><label>В транслит</label>
    <input type="radio" name="radio15" value="From"><label>Из транслита</label>
  </form>
  <?php
  if (isset($_POST["task15"])) {
    if ($_POST["radio15"] === "To")
      echo "Транслит: " . RusToLat($_POST["task15"]);
    else
      echo "Перевод: " . LatToRus($_POST["task15"]);
  }
  ?>
  <!-- 16 -->
  <p>16. Дан массив с вопросами и правильными ответами. Реализуйте тест: выведите на экран все вопросы, под каждым инпут. Пользователь читает вопрос, пишет свой ответ в инпут. Когда вопросы заканчиваются - он жмет на кнопку, страница обновляется и вместо инпутов под вопросами появляется сообщение вида: 'ваш ответ: ... верно!' или 'ваш ответ: ... неверно! Правильный ответ: ...'. Правильно отвеченные вопросы должны гореть зеленым цветом, а неправильно - красным.</p>

  <style>
    .correct {
      background-color: limegreen;
    }

    .wrong {
      background-color: red;
    }
  </style>
  <p><b>Ответы "да" или "нет":</b></p>
  <form action="" method="post">
    <?php
    $quests = [
      "Вопрос 1" => "да",
      "Вопрос 2" => "нет",
      "Вопрос 3" => "нет",
      "Вопрос 4" => "да",
      "Вопрос 5" => "нет",
    ];

    $i = 0;
    foreach ($quests as $quest => $answer) {
      echo $quest . "<br>";
      if (isset($_POST["q$i"])) {
        echo "<p>Ваш ответ: " . $_POST["q$i"] . " - ";
        if ($_POST["q$i"] === $answer)
          echo '<span class = "correct">верно!';
        else
          echo '<span class = "wrong">неверно!';
        echo "</span></p>";
      } else
        echo '<input type="text" name="q' . $i . '"><br>';

      $i++;
    }
    ?>
    <input type="submit" value="submit">
  </form>
  <!-- 17 -->
  <p>17. Модифицируем предыдущую задачу: пусть теперь тест показывает варианты ответов и радиокнопочки. Пользователь должен выбрать один и вариантов.</p>
  <form action="" method="post">
    <?php
    $quests = [
      "Вопрос 1" => "да",
      "Вопрос 2" => "нет",
      "Вопрос 3" => "нет",
      "Вопрос 4" => "да",
      "Вопрос 5" => "нет",
    ];

    $i = 0;
    foreach ($quests as $quest => $answer) {
      echo $quest . "<br>";
      if (isset($_POST["radio17$i"])) {
        echo "<p>Ваш ответ: " . $_POST["radio17$i"] . " - ";
        if ($_POST["radio17$i"] === $answer)
          echo '<span class = "correct">верно!';
        else
          echo '<span class = "wrong">неверно!';
        echo "</span></p>";
      } else
        echo '
        <input type="radio" name="radio17' . $i . '" value="да">
        <label>да</label>
        <input type="radio" name="radio17' . $i . '" value="нет">
        <label>нет</label>
        <br>
        ';

      $i++;
    }
    ?>
    <input type="submit" value="submit">
  </form>
  <!-- 18 -->
  <p>18. Модифицируем предыдущую задачу: пусть теперь на один вопрос может быть несколько правильных ответов. Пользователь должен отметить один или несколько чекбоксов.</p>
  <form action="" method="post">
    <?php
    $quests = [
      "Вопрос 1" => ["да", "нет"],
      "Вопрос 2" => ["нет", "не знаю"],
      "Вопрос 3" => ["нет"],
      "Вопрос 4" => ["да"],
      "Вопрос 5" => ["да", "не знаю"],
    ];

    $variants = [
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
    ];

    $i = 0;
    foreach ($quests as $quest => $answer) {
      // Вопрос №
      echo $quest . "<br>";
      // Ваш ответ: 
      if (isset($_POST["submit"])) {
        echo "Ваш ответ: [";
        $userAnswer = [];
        for ($j = 0; $j < count($variants[$i]); $j++) {
          if (isset($_POST["radio18$i$j"])) {
            array_push($userAnswer, $_POST["radio18$i$j"]);
          }
        }
        // Ответ
        echo implode(", ", $userAnswer) . "] - ";
        // Верно/Неверно
        if (!array_diff($userAnswer, $answer) && !array_diff($answer, $userAnswer))
          echo '<span class = "correct">верно!';
        else
          echo '<span class = "wrong">неверно!';
        echo "</span></p>";
      } else {
        // Чекбоксы  
        for ($j = 0; $j < count($variants[$i]); $j++)
          echo '
            <input type="checkbox" name="radio18' . $i . $j . '" value="' . $variants[$i][$j] . '">
            <label>' . $variants[$i][$j] . '</label>
          ';
        echo "<br>";
      }
      $i++;
    }

    if (isset($_POST["reset"])) $_POST["submit"] = "";
    ?>
    <input type="submit" name="submit" value="submit">
    <input type="submit" name="reset" value="reset">
  </form>
  <!-- 19 -->
  <p>19. Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат.</p>
  <form action="" method="post">
    <input type="text" name="task19">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task19"])) {
    $num = $_POST["task19"];
    $res = 1;
    for ($i = 1; $i <= $num; $i++) {
      $res *= $i;
    }
    echo "Ответ: " . $res;
  }
  ?>
  <!-- 20 -->
  <p>20. Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения.</p>
  <form action="" method="post">
    <label>a = </label>
    <input type="text" name="task20a">
    <label>b = </label>
    <input type="text" name="task20b">
    <label>c = </label>
    <input type="text" name="task20c">
    <br>
    <input type="submit" name="task20sbm" value="submit">
  </form>
  <?php
  if (isset($_POST["task20sbm"])) {
    $a = $_POST["task20a"];
    $b = $_POST["task20b"];
    $c = $_POST["task20c"];
    $D = $b * $b - 4 * $a * $c;
    $d = sqrt(abs($D));

    echo "Ответ: ";
    if ($D == 0) {
      echo "x = " . (-$b + $d) / 2 / $a;
    } else if ($D > 0) {
      echo "x1 = " . (-$b + $d) / 2 / $a . ", ";
      echo "x2 = " . (-$b - $d) / 2 / $a;
    } else {
      echo "x1/2 = (" . -$b . htmlspecialchars_decode("&plusmn", ENT_QUOTES) . $d . "i) / " . 2 * $a;
    }
  }
  ?>
  <!-- 21 -->
  <p>21. Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных.</p>
  <form action="" method="post">
    <label>a = </label>
    <input type="text" name="task21a">
    <label>b = </label>
    <input type="text" name="task21b">
    <label>c = </label>
    <input type="text" name="task21c">
    <br>
    <input type="submit" name="task21sbm" value="submit">
  </form>
  <?php
  if (isset($_POST["task21sbm"])) {
    $a = $_POST["task21a"];
    $b = $_POST["task21b"];
    $c = $_POST["task21c"];
    $sum = 0;
    $max;
    if ($a > $b) {
      $sum += $b * $b;
      $max = $a;
    } else {
      $sum += $a * $a;
      $max = $b;
    }
    if ($max > $c) {
      $sum += $c * $c;
      $max *= $max;
    } else {
      $sum += $max * $max;
      $max = $c * $c;
    }

    if ($max > $sum) echo "Тройка Пифагора";
    else echo "Не тройка Пифагора";
  }
  ?>
  <!-- 22 -->
  <p>22. Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа.</p>
  <form action="" method="post">
    <input type="text" name="task22">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task22"])) {
    $num = $_POST["task22"];
    $results = [];
    for ($i = 1; $i <= intdiv($num, 2); $i++) {
      if ($num % $i == 0)
        array_push($results, $i);
    }

    echo "Делители: " . implode(", ", $results);
  }
  ?>
  <!-- 23 -->
  <p>23. Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку разложите число на простые множители.</p>
  <form action="" method="post">
    <input type="text" name="task23">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task23"])) {
    $num = $_POST["task23"];
    $results = [];
    $i = 1;
    while ($num != 1) {
      $i++;
      if ($num % $i == 0) {
        $num /= $i;
        array_push($results, $i);
        $i = 1;
      }
    }

    echo "Простые множители: " . implode(", ", $results);
  }
  ?>
  <!-- 24 -->
  <p>24. Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел.</p>
  <form action="" method="post">
    <input type="text" name="task24a">
    <input type="text" name="task24b">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task24a"]) && isset($_POST["task24b"])) {
    $a = $_POST["task24a"];
    $b = $_POST["task24b"];
    $results = [];
    for ($i = 1; $i <= intdiv(max($a, $b), 2); $i++) {
      if ($a % $i == 0 && $b % $i == 0)
        array_push($results, $i);
    }

    echo "Общие делители: " . implode(", ", $results);
  }
  ?>
  <!-- 25 -->
  <p>25. Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите наибольший общий делитель этих двух чисел.</p>
  <form action="" method="post">
    <input type="text" name="task25a">
    <input type="text" name="task25b">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task25a"]) && isset($_POST["task25b"])) {
    $a = $_POST["task25a"];
    $b = $_POST["task25b"];
    echo "НОД = " . gcd($a, $b);
  }

  function gcd($a, $b)
  {
    $a = abs($a);
    $b = abs($b);
    while ($b) {
      $temp = $b;
      $b = $a % $b;
      $a = $temp;
    }
    return $a;
  }
  ?>
  <!-- 26 -->
  <p>26. Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите наименьшее число, которое делится и на одно, и на второе из введенных чисел.</p>
  <form action="" method="post">
    <input type="text" name="task26a">
    <input type="text" name="task26b">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task26a"]) && isset($_POST["task26b"])) {
    $a = $_POST["task26a"];
    $b = $_POST["task26b"];
    echo "НОК = " . lcm($a, $b);
  }

  function lcm($a, $b)
  {
    return abs($a * $b / gcd($a, $b));
  }
  ?>
  <!-- 27 -->
  <p>27. Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, второй селект - это месяцы от января до декабря, а третий - это годы от 1990 до 2025. С помощью этих селектов можно выбрать дату. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, ‘воскресенье'.</p>
  <form action="" method="post">
    <input type="text" name="task27a">
    <input type="text" name="task27b">
    <input type="text" name="task27c">
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_POST["task27a"]) && isset($_POST["task27b"]) && isset($_POST["task27c"])) {
    $d = $_POST["task27a"];
    $m = $_POST["task27b"];
    $y = $_POST["task27c"];
    $days = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];

    echo "$d-$m-$y - " . $days[date("N", strtotime("$d.$m.$y")) - 1];
  }
  ?>
</body>

</html>