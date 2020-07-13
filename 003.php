<?php
//kebab case

function kebabCaseWord($word)
{
    return str_replace(" ", "-", $word);
}

$word = 'hello word again';
echo "==kebab case==\n";
$kebabWord = kebabCaseWord($word);
echo $kebabWord;
