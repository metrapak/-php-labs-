<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php

        /*В массиве размером n (1<n<30) найти сумму всех отрицательных элементов. 
        Вывести на экран массив и сумму. */

        start();

        function generation_array(&$array, $A, $B)
        {
            for($i=0; $i<$B; $i++)
            {
                $array[$i] = rand(-10, 10);
            }
        }
         
        function print_array($array) //вывод матрицы на экран
        {
            $result = "<table style=\"font-size: 20px;\">";
            $result .= "<tr>";
            for($i = 0; $i < count($array); $i++)
            {
                $result .= "<td align=\"right\"; width=\"30px\">";
                $result .= $array[$i];
                $result .= "</td>";
            }
            $result .= "</tr>";
            $result .= "</table>";
            echo $result;
        }

        function getSum ($a) 
        {
            function negative($int) 
            {
                return ($int < 0);
           }
           var_dump(array_sum(array_filter($a, "negative")));
        }

        function start()
        {
            $A = $_POST["numberA2"];
            $B = $_POST["numberB2"];

            generation_array($array, $A, $B);
            echo "Массив: ";
            print_array($array);
            
            echo "Сумма всех отрицательных элементов:";
            $start = microtime(true);
            echo getSum($array);
            $time = microtime(true) - $start;
            printf('<br>Скрипт выполнялся %.10F сек.', $time);
        } 
    ?>
</body>
</html>