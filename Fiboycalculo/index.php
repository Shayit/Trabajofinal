<html>

    <head>
        <title>
            Opciones.com
        </title>    
    </head>

    <body>
        <h2>Menú de opciones</h2>
        <h3>*Seleccione una de las opciones a ejecutar:</h3>

        <form action="fibo.php" method="post">
            Fibonacci
            <input type="submit" name="validar" value="Ir">
        </form>
        <form action="calculo.php" method="post">
            Calculos matematicos
            <input type="submit" value="Ir">
        </form>
        <br>
        <h3>*Digita 3 números, vamos a calcular el valor mayor, menor y el promedio: </h3>
        <form action="numeros.php" method="post">
            <input type="text" name="val1">
            <input type="text" name="val2">
            <input type="text" name="val3">
            <input type="submit" value="Ir">
        </form>

    </body>

</html>