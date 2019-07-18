<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$valuesArray = ["F", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
    [5, 5],
    [10, 10.85, ["14.25", "AA"]]
];
$summaValuesArray = 0;


echo "<h1>" . "Dev-Pro.net" . "</h1>";
echo "<h3>" . "ТЗ.№ 3  " . "</h3>";
echo "<h3>" . "Функция подсчета суммы всех элементов в массивах. " . "</h3>";

/**
 * Return summa elements arrays
 * @param array $array
 * @return summa elemenst arrays float
 */
function summaElementsArray(array $array): float
{
    $resultSumma = 0;
    $countArray = 0;
    $element = 0;
    $iterator = 0;

    $countArray = count($array);

    if ($countArray !== 0) {
        while ($iterator < $countArray) {
            $element = $array[$iterator];
            if (is_array($element) === false) {
                if (is_numeric($element) === true) {
                    $resultSumma = $resultSumma + $element;
                }
            } else {
                $resultSumma = $resultSumma + summaElementsArray($element);
            }
            $iterator++;
        }
    }
    return $resultSumma;
}

$summaValuesArray = summaElementsArray($valuesArray);

echo "Сумма всех елементов массива равна :" . $summaValuesArray;




