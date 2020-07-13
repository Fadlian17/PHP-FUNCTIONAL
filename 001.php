<?php
//capitalize word

function capitalizes($word)
{
    return ucwords($word);
}
$word = 'hello word again';
echo "==Capitalize Word== \n";
$words = capitalizes($word);
echo $words;
