<?php
if (!isset($_POST['email'])) {
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>
      Nombre:
      <input name="nombre" type="text" />
    </label>
    <label>
      Teléfono:
      <input name="telefono" type="text" />
    </label>
    <label>
      Email:
      <input name="email" type="text" />
    </label>
    <label>
      Mensaje:
      <textarea name="mensaje" rows="6" cols="50"></textarea>
    </label>
    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar" />
  </form>
<?php
}else{
  $mensaje="Mensaje del formulario de contacto de nnatali.com";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "tuemail@loquesea.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
