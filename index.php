<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Rekenmachine</title>
</head>
<style>
    * {
        font-family: sans-serif;
        overflow: hidden;
    }
    body {
    background: var(--primary-color);
    color: #fff;
}
    .container {
        display: flex;
        height: 550px;
        width: 100%;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    form input[type= "text"]{
        height: 20px;
        border: none;
        display: block;
        border-bottom: 2px solid #ff004f;;
        font-size: 20px;
        outline: none;
    }
    form input[type="text"]:hover {
        border-bottom: 2px solid #fff;
    }
    select {
        width: 250px;
        height: 40px;
        font-size: 20px;
    }
    button {
        width: 250px;
        height: 50px;
        font-size: 20px;
        background-color: #ff004f;
        border-radius: 6px;
        cursor: pointer;
        
    }
    .hero {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        color: var(--second-color);
    }
    .caption {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        color: var(--second-color);
    }
    .answer {
        color: var(--second-color);
        font-size: 30px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    i {
        font-size: 50px;
        cursor: pointer;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .footer {
        width: 100%;
        text-align: center;
        padding: 25px 0;
        color: var(--second-color);
        font-weight: 300;
        margin-top: 20vh;
    }
        /* light mode */
    :root {
        --primary-color: white;
        --second-color: black;
    }
    /* dark mode */
    .dark-theme {
        --primary-color: black;
        --second-color: white;
    }

    #icon {
        width: 30px;
        cursor: pointer;
        
    }
    
</style>
<body>
    <h2 id="icon">🌙</h5>
    <h1 class="hero">Rekenmachine</h1>
    <p class="caption">HTML, CSS, Javascript, PHP</p>
    <div class="container">
        <form action="" method="GET">
            <div class="answer">
            <?php
                if(isset($_GET['submit'])){
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operator'];
                }
                switch($operator){
                    case "geen":
                        echo "U moet een methode selecteren!";
                        break;
                     case "optellen":
                        echo $result1 + $result2;
                        break;
                     case "aftrekken":
                        echo $result1 - $result2;
                        break;
                     case "vermenigvuldigen":
                        echo $result1 * $result2;
                        break;
                     case "delen":
                        echo $result1 / $result2;
                        break;
                }
                ?>
            </div>
            <br><br>
            <input type="text" name="num1" placeholder="Voer eerste nummer">
            <br><br>
            <input type="text" name="num2" placeholder="Voer tweede nummer">
            <br><br>
            <select name="operator" id="">
                <option>geen</option>
                <option>optellen</option>
                <option>aftrekken</option>
                <option>vermenigvuldigen</option>
                <option>delen</option>
            </select>
            <br><br><br>
            <button type="submit" value="bevestigen" name="submit">calculeren</button>
        </form>
    </div>
    <h4 class="footer">Gemaakt door © Mica 2022❤️</h4>

    <script>
        var icon  = document.getElementById('icon');
        icon.onclick = function() {
            document.body.classList.toggle('dark-theme');
        }
    </script>
</body>
</html>