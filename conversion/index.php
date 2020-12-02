<!doctype hrml>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>conversion.com</title>
    </head>
    <body>
        <h1>Conversor de memoria</h1>
        <p>Ingresa un espacio de memoria y slsecciona el espacio a convertir</p>
        
        <br>

        <form action="calculo.php" method="post">
            <p>Memoria a convertir: <input type="text" id="txtvalor" name="txtvalor"></p>
                <select name="smedidas">
                    <option value="">Escoge..</option>
                    <option value="byte">Byte</option>
                    <option value="kilobyte">Kilobyte</option>
                    <option value="megabyte">Megabyte</option>
                    <option value="gigabyte">Gigabyte</option>
                    <option value="terabyte">Terabyte</option>
                </select> 
            <p>Convertir memoria a: </p>
            <p>
                <input type="radio" name="medidas" value="byte">Byte<br>
                <input type="radio" name="medidas" value="kilobyte">Kilobyte<br>
                <input type="radio" name="medidas" value="megabyte">Megabyte<br>
                <input type="radio" name="medidas" value="gigabyte">Gigabyte<br>
                <input type="radio" name="medidas" value="terabyte">Terabyte<br>
            </p>
            <p><input type="submit" name="botoncal" value="Calcular">
        </form>
    </body>
</html>