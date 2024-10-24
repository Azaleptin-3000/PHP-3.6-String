<?php
// Задача 1. Объявление двух строк
$string1 = "Привет, ";
$string2 = "мир!";

// Конкатенация строк
$result = $string1 . $string2;

// Вывод результата
echo $result; // Выведет: Привет, мир!

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 2.1. Изменение регистра
    Объявление строки
*/
$string = "Hello, World!";

// Преобразование в верхний регистр
$upperCase = strtoupper($string);
echo "Верхний регистр: " . $upperCase . "\n"; // Ожидаемый вывод: HELLO, WORLD!

// Преобразование в нижний регистр
$lowerCase = strtolower($string);
echo "Нижний регистр: " . $lowerCase . "\n"; // Ожидаемый вывод: hello, world!

// С кириллическими символами функции strtoupper() и strtolower() работют некорректно!

echo "<div style='border-bottom: 1px; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 2.2 Изменение регистра с поддержкой кириллицы
    Объявление строки
*/
$string = "Привет, Мир!";

// Преобразование в верхний регистр
$upperCase = mb_strtoupper($string, 'UTF-8');
echo "Верхний регистр: " . $upperCase . "\n"; // Ожидаемый вывод: ПРИВЕТ, МИР!

// Преобразование в нижний регистр
$lowerCase = mb_strtolower($string, 'UTF-8');
echo "Нижний регистр: " . $lowerCase . "\n"; // Ожидаемый вывод: привет, мир!

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача 3. Сравнение двух строк
    Объявление двух строк
*/
$string1 = "Привет, мир!";
$string2 = "привет, МИР!";

// Сравнение строк с учетом регистра
if ($string1 === $string2) {
    echo "Строки идентичны с учетом регистра (===).\n";
} else {
    echo "Строки не идентичны с учетом регистра (===).\n"; // Это будет выведено
}

// Сравнение строк без учета регистра
if ($string1 == $string2) {
    echo "Строки идентичны без учета регистра (==).\n";
} else {
    echo "Строки не идентичны без учета регистра (==).\n"; // Это будет выведено
}

// Использование функции strcasecmp()
$result = strcasecmp($string1, $string2);
if ($result === 0) {
    echo "Строки идентичны без учета регистра (strcasecmp).\n"; // Это будет выведено
} else {
    echo "Строки не идентичны без учета регистра (strcasecmp).\n";
}

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача 4.1. Поиск подстроки
    Объявление строки
*/
$string = "Привет, мир! Как дела, мир?";
// Подстрока, которую нужно найти
$substring = "мир";

// Поиск позиции подстроки
$position = strpos($string, $substring);

if ($position !== false) {
    echo "Подстрока '$substring' найдена на позиции: $position\n"; // Ожидаемый вывод: 8
} else {
    echo "Подстрока '$substring' не найдена.\n";
}
/* С кириллическими символами функция strpos() работает некорректно
Echo - Подстрока 'мир' найдена на позиции: 14! 
*/

echo "<div style='border-bottom: 1px; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача 4.1. Поиск подстроки с кириллическими символами
    Объявление строки с использованием функции mb_strpos()
*/
$string = "Привет, мир! Как дела, мир?";
$substring = "мир";

// Поиск позиции подстроки с помощью mb_strpos()
$position = mb_strpos($string, $substring, 0, 'UTF-8');

if ($position !== false) {
    echo "Подстрока '$substring' найдена на позиции: $position\n"; // Ожидаемый вывод: 8
} else {
    echo "Подстрока '$substring' не найдена.\n";
}

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>


<?php
/* Задача 5. Поиск подстроки
    Объявление строки
*/
$string = "Привет, мир! Как дела, мир?";
// Слово, которое нужно заменить
$search = "мир";
// Слово, на которое нужно заменить
$replace = "Вселенная";

// Замена подстроки
$result = str_replace($search, $replace, $string);

// Вывод результата
echo $result; // Ожидаемый вывод: Привет, Вселенная! Как дела, Вселенная?

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача 6. Форматирование строки
    Объявление переменных
*/
$name = "Алексей";
$age = 30;
$city = "Красногорск"; // Основное название города
$cityInPrepositional = "Красногорске"; // Склонение для предложного падежа

// Форматирование строки с использованием sprintf()
$formattedString = sprintf("Меня зовут %s, мне %d лет и я живу в %s.", $name, $age, $cityInPrepositional);

// Вывод результата
echo $formattedString; // Ожидаемый вывод: Меня зовут Алексей, мне 30 лет и я живу в Москве.

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 7. Разделение строки
    Исходная строка
*/
$string = "яблоко,груша,банан,апельсин";
// Разделитель
$delimiter = ",";

// Разделение строки на массив
$array = explode($delimiter, $string);

// Вывод массива
echo "Массив: ";
print_r($array); /* Вывод массива в читаемом формате.
Ожидаемый вывод: Array ( [0] => яблоко [1] => груша [2] => банан [3] => апельсин )
*/

echo "<div style='border-bottom: 1px; margin-right: auto; margin-bottom: 15px;'></div>";

// Объединение массива обратно в строку
$rejoinedString = implode($delimiter, $array);

// Вывод результата
echo "Объединенная строка: " . $rejoinedString; // Ожидаемый вывод: яблоко,груша,банан,апельсин

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 8. Работа с многострочным текстом
    Многострочный текст
*/
$text = "Привет, мир!\nКак дела?\nЭто многострочный текст.\nПока!";

// Преобразование многострочного текста в HTML-разметку
$htmlText = nl2br($text);

// Вывод результата
echo $htmlText; // Ожидаемый вывод: Привет, мир!<br>Как дела?<br>Это многострочный текст.<br>Пока!

// Разделительная пунктирная линия
echo "<div style='border-bottom: 3px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача [2] 1. Сложная конкатенация строк
    Объявление переменных
*/
$name = "Алексей";
$age = 54; // Возраст
$city = "Красногорск"; // Основное название города
$cityInPrepositional = "Красногорске"; // Склонение для предложного падежа

// Сложная конкатенация строк с учетом падежей
$formattedString = "Меня зовут " . $name . ", мне " . $age . " лет и я живу в " . $cityInPrepositional . ".";

// Вывод результата
echo $formattedString; // Ожидаемый вывод: Меня зовут Алексей, мне 54 лет и я живу в Красногорске.

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача [2] 2. Изменение регистра с условиями
    Исходная строка
*/
$string = "привет, МИР! как дела, мир?";

// Приведение строки к нижнему регистру и преобразование первой буквы каждого слова в заглавную
$formattedString = ucwords(strtolower($string));

// Вывод результата
echo $formattedString; // Ожидаемый вывод: Привет, Мир! Как Дела, Мир?

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача [2] 3. Сравнение строк с учётом регистра и без
    Объявление строк
*/
$string1 = "Привет, мир!";
$string2 = "привет, мир!";

// Сравнение с учетом регистра
if ($string1 === $string2) {
    echo "Строки полностью совпадают (учёт регистра).\n";
} else {
    echo "Строки не совпадают (учёт регистра).\n"; // Ожидаемый вывод
}

// Сравнение без учета регистра
if (strcasecmp($string1, $string2) === 0) {
    echo "Строки совпадают (без учёта регистра).\n"; 
} else {
    echo "Строки не совпадают (без учёта регистра).\n"; // Ожидаемый вывод
}

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача [2] 4. Замена подстроки с использованием массива
    Исходная строка */
$text = "Я люблю фрукты: яблоки, груши и бананы. Яблоки и груши — мои любимые!";
    
// Массив слов для замены (от длинного к короткому)
$search = ["яблоки", "груши", "бананы"];
$replace = ["киви", "апельсины", "ананасы"];
    
// Замена слов в строке
$modifiedText = str_replace($search, $replace, $text);
    
// Вывод результата
echo $modifiedText; // Ожидаемый вывод: Я люблю фрукты: киви, апельсины и ананасы. Киви и апельсины — мои любимые!

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача [2] 5. Форматирование строки с числом
    Объявление переменных
*/
$name = "Алексей"; // Имя
$age = 54; // Возраст
$city = "Красногорск"; // Город проживания
$cityInPrepositional = "Красногорске"; // Склонение для предложного падежа

// Форматирование строки с использованием sprintf()
$formattedString = sprintf("Меня зовут %s, мне %d лет и я живу в %s.", $name, $age, $cityInPrepositional);

// Вывод результата
echo $formattedString; // Ожидаемый вывод: Меня зовут Алексей, мне 54 лет и я живу в Красногорске.

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача [2] 6. Разделение и объединение сложной строки
    Исходная строка с числовыми значениями, разделёнными запятыми
*/
$numbersString = "10,20,30,40,50";

// Разделение строки на массив чисел
$numbersArray = explode(",", $numbersString);

// Суммирование элементов массива
$sum = array_sum($numbersArray);

// Вывод результата
echo "Сумма чисел: " . $sum; // Ожидаемый вывод: Сумма чисел: 150

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
// Задача [2] 7. Создание случайной строки
function generateRandomString($length = 10) {
    // Массив символов: буквы и цифры
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';

    // Генерация случайной строки
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1); // Генерация случайного индекса
        $randomString .= $characters[$randomIndex]; // Добавление символа к строке
    }

    return $randomString; // Возврат случайной строки
}

// Пример использования функции
$randomString = generateRandomString(12); // Генерация строки длиной 12 символов
echo "Случайная строка: " . $randomString; // Вывод случайной строки

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 25%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача [2] 8. Проверка строки на палиндром
    Видоизменённая функция mb_strrev() для переворота строки с поддержкой многобайтовых символов. Функция strrev() не работает корректно с многобайтовыми символами (такими как кириллица)!
*/
function mb_strrev($string) {
    // Разбиваем строку на массив символов и переворачиваем его
    $reversedArray = array_reverse(mb_str_split($string));
    
    // Собираем строку обратно
    return implode('', $reversedArray);
}

function isPalindrome($string) {
    // Удаляем все не буквенные символы, приводим строку к нижнему регистру
    $normalizedString = mb_strtolower(preg_replace("/[^\p{L}]/u", '', $string));

    // Переворачиваем строку с использованием mb_strrev
    $reversedString = mb_strrev($normalizedString);
    
    // Сравниваем оригинальную и перевернутую строки
    return $normalizedString === $reversedString;
}

// Пример использования функции
$testString = "А роза упала на лапу Азора";
if (isPalindrome($testString)) {
    echo "\"$testString\" является палиндромом.";
} else {
    echo "\"$testString\" не является палиндромом.";
}
?>