<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Benvenuto nomade!</h1>
        <div class="line"></div>
        <h2>Se ti senti perso, posso dirti chi eri,</h2>
        <h2>ma devo prima sapere chi sei.</h2>

        
    </header>
    
    <main>
        <form action="./side-project-three.php" method="POST">
            <h6>Come ti chiami?</h6>
            <input type="text" name="name" placeholder="Scrivi qui il tuo nome">
            <h6>Qual &egrave il tuo casato?</h6>
            <input type="text" name="surname" placeholder="Scrivi qui il tuo cognome">
            <h6>Qual &egrave la tua citt&agrave natale?</h6>
            <input type="text" name="city" placeholder="Scrivi qui dove sei nato">
            <p>Bene, se ti senti pronto. Procedi!</p>
            <button type="submit">VAI!</button>
    
        </form>

    </main>
</body>
</html>

<style>
    *{
    margin: 0;
    padding: 0;
    }

    header{
        background-color: teal;
        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    main{
        background-image: url(./img/seer.jpg);
        background-repeat: no-repeat;
        background-position: right;
        height: 100vh;
    }

    form{
        background-color: rgba( 255, 255, 255, 40%);
    }

    .line{
        height: 1px;
        width: 50%;
        background-color: black;
    }

    h6{
        font-size: 20px;
    }

    input{
        width: 250px;
    }

    button{
        width: 20%;
    }

</style>
