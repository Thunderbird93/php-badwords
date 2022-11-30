<?php

$na = $_POST['name'];
$nar = strrev($na); 
$su = $_POST['surname'];
$sur = strrev($su);
$ci = $_POST['city'];
$cir = strrev($ci);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="testo">
            <h1>Tu sei il grande <?php echo ucwords(strtolower($nar)); ?>,</h1>
            <p>Filgio di <?php echo ucwords(strtolower($sur)); ?>,</p>
            <p>Della trib&ugrave di <?php echo ucwords(strtolower($cir)); ?>!</p>
            <p>Uno degli ultimi sette saggi! Purvurur, Garen, Pastararin, Giugiar, Taram, Fusciusc e Tarin He!
Colui il quale può leggere nel presente, nel passato e anche nel congiuntivo! </p>
        </div>
    </main>
</body>
</html>

<style>
    body{
        margin:0;
        padding:0;
    }

    main{
        background-image: url(./img/pdor.jpeg);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right;
        height: 100vh;
    }

    .testo{
        height: 100vh;
        width: 50vw;
    }
</style>