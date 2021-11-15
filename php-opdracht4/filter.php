<?php
include_once './Database.php';
include_once './Read.php';

$read = new Read(new Database, '*', 'woorden', 'scheldwoord');
$scheldWoordenSet = $read->executeRead();
if (isset($_POST['submit'])) {
    $text = $_POST["text"];

    $text = str_replace(",", " ,", $text);

    $explodeValue = explode(" ", $text);

   

    foreach ($explodeValue as $getal => $woord) {
        
        if (in_array(strtolower($woord), $scheldWoordenSet)) {
            $explodeValue[$getal] = '***';
        }

    }
    $implodeValue = implode(" ", $explodeValue);
    echo $implodeValue;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scheldwoorden</title>
</head>

<body>
    <br>
    <form action="" method="post">
        Vul hier een zin in met een scheldwoord: <input type="text" name="text" id="text">
        <input type="submit" name="submit" value="submit">
        
    </form>

</body>

</html>