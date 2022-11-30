<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>
    <img src="./img/saw.jpeg" alt="">
    <h1>Vogliamo giocare?</h1>
    <div class="scelta">
        <button class="best">
            <a class="good" href="./side-project-two.php">Sì, certamente!</a>
        </button>
        <button class="worst">
            <a class="bad" href="./index.php">No, portami indietro.</a>
        </button>
    </div>
    </span>
</body>
</html>

<style>
    a{
        text-decoration: none;
        color: black;
        background-color: silver;
        border-radius: 5px;
        padding: 5px;
    }

    .good:hover{
        background: red;
    }

    .worst:hover{
        background-image: url(./img/spiderman.jpeg);
        background-size: cover;
    }

    .best:hover{
        background-image: url(./img/spidey.jpg);
        background-size: cover;
    }

    .bad:hover{
        background: green;
    }

    img{
        height: 250px;
    }
    body{
        background-color: white;
    }

    button{
        width: 300px;
        height: 200px;
        margin: 10px;
        border: none; 
        background-color: white;
        /*debug*/
        border: 1px dotted grey;
    }

    span{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


</style>