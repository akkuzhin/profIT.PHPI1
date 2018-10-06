<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача №5</title>
</head>
<body>
    <h2>Задача №5</h2>
    <p>В PHP имеется логический (boolean) тип, имеющий два значения - true (истина) и false (ложь). Изучите с помощью var_dump() следующие выражения и объясните их (прочитайте предварительно http://fi2.php.net/manual/ru/language.operators.comparison.php ):</p>
    <p>
        <?php
            var_dump(1 == 1.0); //(bool)true
            /*
             *  В данном случае у нас сравниваются просто два числа 1 и 1.0
             *  результат сравнения TRUE
             */
        ?><br>
        <?php
            var_dump(1 === 1.0); //(bool)false
            /*
            *  В данном случае у нас жесткое равно  между 1 и 1.0
             * Кроме самих значений сравниваются еще и типы т.е 1 - имеет тип (integer) , а 1.0 - тип (float)
             * Результат сравнения FALSE
            */
        ?><br>
        <?php
            var_dump('02' == 2); //bool)true
            /*
             * Здесь сравниваются число со строкой, содержашие число, в PHP строка содержащие числа будет
             * преобразована в число, и сравниваться они будут как числа. Результат: TRUE
             */
        ?><br>
        <?php
            var_dump('02' === 2); //(bool)false
            /*
             * В данном случае у нас жесткое равно  между '02' и 2.0
             * По значению они равны, но кроме самих значений сравниваются еще и типы т.е '02' - имеет тип (string) , а 2.0 - тип (float)
             * Результат сравнения FALSE
             */
        ?><br>
        <?php
            var_dump('02' == '2'); //bool)true
            /*
            * Здесь сравнивается две строки содержащие числа, в PHP строка содержащие числа будет
             * преобразована в число, и сравниваться они будут как числа. Результат: TRUE
            */
        ?><br>
    </p>
</body>
</html>