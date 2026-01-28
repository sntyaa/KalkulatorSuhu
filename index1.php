<?php include 'calculate.php'; ?>

<html>
    <head>
        <title>Calculator Suhu</title></head>
        <body>
            <h1><?= $c; ?><span>C</span></h1>
            <h1><?= $f; ?><span>F</span></h1>
            <h1><?= $k; ?><span>K</span></h1>
            <h1><?= $r; ?><span>R</span></h1>
            <hr>
            <form method="get" action="index1.php">
            <label for="celcius">Celcius</label>
            <input type="number" name="celcius" id="">
            <input type="submit" name="dor" value="celci">
            <br>
            <label for="">Farenheit</label>
            <input type="number" name="fahrenheit" id="">
            <input type="submit" name="dor" value="fare">
            <br>
            <label for="">Kelvin</label>
            <input type="number" name="kelvin" id="">
            <input type="submit" name="dor" value="kelv">
            <br>
            <label for="">Reamur</label>
            <input type="number" name="reamur" id="">
            <input type="submit" name="dor" value="rea">
            <br>
        </form>
        <a href="index1.php">
            <button>Bersihkan</button>
        </a>
        </body>
</html>