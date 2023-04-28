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
  <title>Operadores</title>
</head>
<body>
  <h1>Jugando con los operadores</h1>
  <?php
    $n1 = 2345;
    $n2 = 756;
    echo 'Suma: '.($n1+$n2).'<br/>';
    echo 'Resta: '.($n1-$n2).'<br/>';
    echo 'Multiplicación: '.($n1*$n2).'<br/>';
    echo 'División: '.($n1/$n2).'<br/>';
    echo 'Modulo: '.($n1%$n2).'<br/>';

    //Incremento o decremento
    echo '<h1>Jugando con incremento y decremento</h1>';
    $year = 2004;
    echo $year.'<br/>';
    $year++;
    echo $year.'<br/>';
    $year--;
    echo $year.'<br/>';
    $year-=43;
    echo $year.'<br/>';
    $year+=345;
    echo $year.'<br/>';

  ?>
</body>
</html>