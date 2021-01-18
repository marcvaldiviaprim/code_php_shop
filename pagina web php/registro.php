<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
	<h1>Registro</h1>
   	<input type="text" name="nick" placeholder="nick">
   	<input type="email" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="password">
   	<input type="submit" name="Registro">
    </form>
        <?php 
        include("registro_validacion.php");
        ?>
</body>
</html>