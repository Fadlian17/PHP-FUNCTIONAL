<?php
//snake case

function snakeCaseWord($word)
{
    return str_replace(" ", "__", $word);
}

$word = 'hello word again';
echo "==snake case==\n";
$snakeWord = snakeCaseWord($word);
echo $snakeWord;
