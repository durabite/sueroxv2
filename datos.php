<?php
  include("db.php");

  if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $creado = date("d/m/y");
    $ubicacion = $_POST ['ubicacion'];

    $query = "INSERT INTO lead(nombre, correo, sexo, edad, creado, ubicacion) VALUES ('$nombre', '$correo', '$sexo', '$edad', '$creado', '$ubicacion')";
    $resultado = mysqli_query($conex, $query);

    if (!$resultado) {
      die("No se guardo");
    }

    header ("Location: preguntas.php");

  }
 ?>
