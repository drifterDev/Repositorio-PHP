<?php

/*
 * MIT License
 *
 * Copyright (c) 2023 Mateo Álvarez Murillo
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * This software and associated files are subject to the terms and conditions of
 * the MIT License and are included in this distribution. A copy of the license
 * can be found in the file LICENSE in the root of this distribution.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

if (!empty($_POST['nombre']) && !empty($_POST['apellidos'])  && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass']) ){
  $error="Ok";
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $edad=$_POST['edad'];
  $email=$_POST['email'];
  $password=$_POST['pass'];


  //Validar nombre
  if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
    $error="Nombre asignado mal";
  }
  else if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)){
    $error="Apellidos asignado mal";
  }
  else if (!is_numeric($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
    $error="Edad asignada mal";
  }
  else if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error="Email asignado mal";
  }
  else if (empty($password) || strlen($password)<5){
    $error="Password asignado mal";
  }
}
else{
  $error="Faltan valores";
}
if ($error!="Ok"){
  header("Location:formulario2.php?error=".$error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procesar formulario</title>
</head>
<body>
  <?php if ($error=='Ok'):?>
    <h1>Datos validados correctamente</h1>
    <p><strong>Nombre: </strong><?=$nombre?></p>
    <p><strong>Apellidos: </strong><?=$apellidos?></p>
    <p><strong>Edad: </strong><?=$edad?></p>
    <p><strong>Email: </strong><?=$email?></p>
  <?php endif;?>
</body>
</html>