<?php
//senteces trims

function WordTrims($word, $limitless)
{
    if (str_word_count($word, 0) > $limitless) {
        $words = str_word_count($word, 2);
        $pos = array_keys($words);
        $word = substr($word, 0, $pos[$limitless]);
    }
    return $word;
}

$senteces = WordTrims("ini adalah tulisan yang sangat panjang", 3);
echo "ini adalah tulisan yang sangat panjang\n";
echo "trim words to\n";
echo $senteces;
