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
  <title>Primera pagina PHP</title>
</head>
<body>
  <?php
    // Comenzando a hacer un listado de los libros leidos
    echo "<h2>Listado de libros leidos este año</h2>";
    echo"<ul>"
        . "<li>Imperio Final</li>"
        . "<li>El Pozo de la ascension</li>"
        . "<li>El Heroe de las eras</li>"
        . "<li>El barco de los muertos</li>"
        . "<li>La historia secreta de Mistborn</li>"."</ul>";
    echo "<p>Hasta el momento he leído"." 5 libros</p>";
  ?>
  <!--Otras formas de hacer un echo-->
  <?="<br/><p>Otra forma de hacer un echo rapido</p>"?>
</body>
</html>
