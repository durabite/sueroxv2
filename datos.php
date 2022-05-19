<?php

  include("db.php");

  if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $ubicacion = $_POST['ubicacion'];
    $creado = date("Y-m-d H:i:s");

    $sql = "INSERT INTO users(nombre, correo, sexo, edad, creado, ubicacion) VALUES ('$nombre', '$correo', '$sexo', '$edad','$creado','$ubicacion');";

    if ($conn->query($sql) === TRUE) {
      //echo "New record created successfully";
      header("Location: preguntas.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  };
 ?>
