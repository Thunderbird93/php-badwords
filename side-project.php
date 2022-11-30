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
        <button>
            <a href="./side-project-two.php">Sì, certamente!</a>
        </button>
        <button>
            <a href="./index.php">No, portami indietro.</a>
        </button>
    </div>
    </span>
</body>
</html>

<style>
    a{
        text-decoration: none;
        color: black;
    }
    img{
        height: 250px;
    }
    body{
        background-color: white;
    }

    button{
        width: 100px;
        margin: 10px;
    }

    span{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


</style>