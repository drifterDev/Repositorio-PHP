<!--
MIT License

Copyright (c) 2023 Mateo Álvarez Murillo

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
  <h1>Calculadora con PHP</h1>
  <form action="calculadora.php" method="POST">
    <label for="numero1">Numero 1</label><br>
    <input type="number" name="numero1" pattern="[0-9]+" required><br>
    <label for="numero2">Numero 2</label><br>
    <input type="number" name="numero2" pattern="[0-9]+" required><br><br>
    <input type="submit" value="Sumar" name="sumar"/>
    <input type="submit" value="Restar" name="restar"/>
    <input type="submit" value="Multiplicar" name="multiplicar"/>
    <input type="submit" value="Dividir" name="dividir"/>
    <?php
    if (isset($_GET['mensaje'])){
      echo "<p><strong>Resultado = ".$_GET['mensaje']."</strong></p>";
    }
    ?>
  </form>
</body>
</html>