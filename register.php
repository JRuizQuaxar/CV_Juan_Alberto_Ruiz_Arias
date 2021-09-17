<?php 
/*El codigo de abajo, nos ayuda a establecer el horario de nuestra localización, en mi caso, México*/
date_default_timezone_set('America/Mexico_City');

/*Base de datos*/
include("con_db.php");

/*Condición*/
if (isset($_POST['register'])) {
		
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['ape']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['message']) >= 1){
	    /*Extraemos cada uno de los campos recibidos*/
		$name = trim($_POST['name']);
		$ape = trim($_POST['ape']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
	    $message = trim($_POST['message']);
	    $fechareg = date("Y-m-d H:i:s");
	    /*Realizamos la consulta directa en MyAdmin, este es el núcleo*/
		$consulta = "INSERT INTO datos(nombre, apellidos, telefono, email, mensaje, fecha_reg) VALUES ('$name','$ape','$phone','$email','$message','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
			<!--Condición-->
	    	<h3 class="correcto">¡Información enviada correctamente!</h3>
           <?php
	    } else {
		    	?> 
			<!--Condición-->
	    	<h3 class="mal">¡Ups, verifica los campos, hay un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
			<!--Condición-->
	    	<h3 class="mal">¡Completa los campos!</h3>
           <?php
		   /*
		   		$destino = "jruiz@quaxar.com";
				   $nombre = $_POST["name"];
				   $correo = $_POST["email"];
				   $mensaje = $_POST["message"];
				   
				   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
				   mail ($destino, "Contacto", $contenido);
				   header("Location: index.php");
				   */
    }
	/*
	$quien =$email;
	$titulo = "Prueba";
	$mensaje = $message

	Nombre: $name
	Apellidos: $ape;
	$headers = 'From:  juan <juan@juan.cl> '. " \r\n".
				 'Reply-To: juan@juan.cl ' . " \r\n".
			   	 'Content-Type: text/plain; charset=utf-8' . " \r\n".
				 'X-Mailer: PHP/' . phpversion();
				 

	mail($quien,$titulo,$mensaje,$header)
	*/
}
?>
