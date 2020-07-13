<?php
//convert number to string
function Change($numberic)
{
    $numberic = str_replace('.', '', $numberic);

    if (!is_numeric($numberic)) throw new NotNumbersException;

    $base    = array('nol', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan');
    $numeric = array('1000000000000000', '1000000000000', '1000000000000', 1000000000, 1000000, 1000, 100, 10, 1);
    $unit    = array('kuadriliun', 'triliun', 'biliun', 'milyar', 'juta', 'ribu', 'ratus', 'puluh', '');
    $list_numberic     = null;

    $i = 0;

    if ($numberic == 0) {
        $list_numberic = 'nol';
    } else {
        while ($numberic != 0) {
            $count = (int)($numberic / $numeric[$i]);

            if ($count >= 10) {
                $list_numberic .= convert($count) . ' ' . $unit[$i] . ' ';
            } elseif ($count > 0 && $count < 10) {
                $list_numberic .= $base[$count] . ' ' . $unit[$i] . ' ';
            }

            $numberic -= $numeric[$i] * $count;

            $i++;
        }

        $list_numberic = preg_replace('/satu puluh (\w+)/i', '\1 belas', $list_numberic);
        $list_numberic = preg_replace('/satu (ribu|ratus|puluh|belas)/', 'se\1', $list_numberic);
        $list_numberic = preg_replace('/\s{2,}/', ' ', trim($list_numberic));
    }

    return $list_numberic;
}
$satu = Change(1);
$belasan = Change(12);
$puluhan = Change(30);
echo "==satuan==\n";
echo $satu;
echo "\n";
echo "==belasan==\n";
echo $belasan;
echo "\n";
echo "==puluhan==\n";
echo $puluhan;
