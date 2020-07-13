<?php
//frequent number and grades

function mode_frequent($freq)
{
    $freq = array_map('strval', $freq);
    $count_freq = array_count_values($freq);

    arsort($count_freq);

    $ability = key($count_freq);
    $count_num = current($count_freq);
    $count_gra = next($count_freq);

    if ($count_num != $count_gra) {
        //occur different
        echo $ability;
    }
}


$numbers = [1, 2, 3, 4, 5, 6, 6, 8, 8, 6, 9];
$grades = [87.5, 88.5, 60.5, 90.5, 88.5];


echo "======Most Frequent Numbers======\n";
$most_frequent_numbers = mode_frequent($numbers);
echo $most_frequent_numbers;
echo "\n";
echo "\n======Most Frequent Grades======\n";
$most_frequent_grades = mode_frequent($grades);
echo  $most_frequent_grades;
