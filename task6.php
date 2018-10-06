<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача №6</title>
</head>
<body>
    <h2>Задача №6</h2>
    <p>
        $x = true xor true; <br>
        var_dump($x); <br>
        Попробуйте объяснить результат
    </p>
    <p>
        <?php
            $x = true;
            $y = false;

            var_dump($x xor $y);
            var_dump($x xor $x);

            /*
             * Суть задачи заключаются в следующем.
             * Дана логическая функция XOR – исключающее ИЛИ.
             * Это функция от двух аргументов, каждый из которых может быть нулем или единицей.
             * Она принимает значение 1, когда один из аргументов равен единице, но не оба, иначе 0.
             */
        ?>
</body>
</html>