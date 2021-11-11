<?php
include_once './Database.php';
include_once './Read.php';

$read = new Read(new Database, '*', 'woorden', 'scheldwoord');
$scheldWoordenSet = $read->executeRead();

$text = "Lorem ipsum dolor sit homo, consectetur adipiscing elit, sed do mooi tempor stom ut labore et dolore magna aliqua.";
$text = str_replace(",", " ,", $text);

$explodeValue = explode(" ", $text);

foreach ($explodeValue as $getal => $woord) {
    if (in_array(strtolower($woord), $scheldWoordenSet)) {
        $explodeValue[$getal] = '***';
    }
}
$implodeValue = implode(" ", $explodeValue);
echo $implodeValue;
