<?php
  $destino= "big_tower_hotel@yahoo.es";
  $nombre= $_POST["nombre"];
  $correo= $_POST["correo"];
  $telefono= $_POST["telefono"];
  $mensaje= $_POST["mensaje"];
  $contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\ntelefono: " . $telefono . "\nMensaje: " . $mensaje;
  mail($destino,"Contacto Web", $contenido);
  header("Location:index.html");
 ?>
