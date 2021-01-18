<?php 

include("database.php");

if (isset($_POST['Registro'])) {
	    $nick = trim($_POST['nick']);
        $correo = trim($_POST['email']);
        $password = trim($_POST['password']);
        
	    $insert = "INSERT INTO usuarios(correo, nick, password) VALUES ('$correo','$nick','$password')";
	    $resultado = mysqli_query($conn,$insert);
	    if ($resultado) {
	    	?> 
	    	<h1 class="ok">Datos insertados</h1>
           <?php
	    } else {
            echo 'Error';
	    }
    
}

?>