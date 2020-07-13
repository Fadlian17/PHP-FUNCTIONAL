<?php

function trimAbility($word, $limit)
{
    $ability = substr($word, 0, $limit) . '.......';
    return $ability;
}

$senteces = trimAbility("ini adalah tulisan yang sangat panjang", 8);
echo "ini adalah tulisan yang sangat panjang\n";
echo "trim words to\n";
echo $senteces;
