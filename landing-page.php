<?php

$par = $_POST['par'];
$bad = $_POST['bad'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords - landing page</title>
</head>
<body>
    <p>Paragrafo: <?php echo $par ?> </p>
    <p>Badword: <?php echo $bad ?> </p>
    <p>Lunghezza Paragrafo: <?php echo strlen($par) ?></p>
    <p><?php echo str_replace($bad,'***',$par) ?></p>
    <!-- Altro -->
    <a href="./side-project.php">NON cliccare questo link</a>
</body>
</html>

<style>
    a{
        color: red;
    }
</style>

