<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> <!--Idioma español-->
    <link rel = "icon" type="icon/png" href="https://geniuslyrics.net/i/bands/350/twenty-one-pilots-scaled-and-icy.jpg"> <!--Icono de la pestaña-->
    <title>Contacto</title> <!--Nombre de la pestaña-->
    <link rel = "stylesheet" type="text/css" href="index.css">
</head>
<body>
    <!--Todo lo que está abajo de este "Body, se realizo en orden y es a como está dentro de esa sección de mi página"-->
    <nav id= "Nav">
        <h1>
            CURRICULUM VITAE
        </h1>
    </nav>
    <a href="index.php">PERFIL                       </a><   >
    <a href="education.php">     FORMACIÓN EDUCATIVA       </a><   >
    <a href="laboralExperience.php">     EXPERIENCIA LABORAL       </a><   >
    <a href="skills.php">     SKILLS       </a><   >
    <a href="contact.php">CONTACTO</a><   >

        <h1  id="Titulo">
            CONTACTO
        </h1>
    
    <div id="fotoContacto"> 
        </div>

    <form method="post"> <!--action="register.php"--> <!--El codigo de a lado, no me salió, intenté pero no pude, el archivo "send.php" era su complemento, pero lo dejo para que se observe que hice el intento.-->
    	<h1 id="formTitulo"> <>Juan Alberto Ruiz Arias<></h1>
    	<input type="text" name="name" placeholder="Nombre completo" >
    	<input type="text" name="ape" placeholder="Apellidos" >
        <input type="text" name="phone" placeholder="Telefono" >
        <input type="email" name="email" placeholder="Email" >
        <input type="text" name="message" placeholder="Cuerpo de mensaje" >
    	<input type="submit" name="register"> 
    </form>
        <?php 
        include("register.php");
        ?>
    <h3  id="pieContact">
        COPYRIGHT © 2021 - JUAN ALBERTO RUIZ ARIAS - MÉXICO
        </h3>
</div>

</body>
</html>