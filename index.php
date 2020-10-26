<?php

$ilerazy = $_POST['ilerazy'];

$duzelitery = range('A', 'Z');
$malelitery = range('a', 'z');
$cyfry = range('0', '9');
$znaki = array('/','\\',':',';','!','@','#','$','%','^','*','(',')','_','+','=','|','{','}','[',']','"',"'",'<','>',',','?','~','`','&','.');
$wszystko = array($malelitery, $duzelitery, $cyfry, $znaki);
    
    shuffle($malelitery);
    shuffle($duzelitery);
    shuffle($cyfry);
    shuffle($znaki);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <input type="number" name="ilerazy" id="ilerazy">
        <button type="submit">Losuj</button>
</form>
    <?php
    if(isset($_POST['ilerazy'])){
        for ($i=0; $i <$_POST['ilerazy']; $i++) {
            $haslo = "";
            shuffle($wszystko);
            for ($x=0; $x <4; $x++) { 
                shuffle($wszystko[$x]);
                for ($y=0; $y<2; $y++) { 
                    $haslo .= $wszystko[$x][$y];
                }
            } 
            echo $haslo . "<br>";
        }
    }
?>
</body>
</html>