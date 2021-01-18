<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    
    <?PHP 

    

        try{
           require('database.php');
            


            $base = new PDO("mysql:host=$SERVER; dbname=tienda","root","usbw"); 

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql= "SELECT * FROM usuarios WHERE correo = :correo AND password= :password";

            $resultado = $base->prepare($sql);

            $login=htmlentities(addslashes($_POST["correo"]));
            $password=htmlentities(addslashes($_POST["password"]));  
                 
            $resultado->bindValue(":correo", $login);

            $resultado->bindValue(":password", $password);

            $resultado->execute();

            $numero_registro =$resultado->rowCount();

            if($numero_registro!=0){
                echo "<h1>hola</h1>";

            }else{
                header("location:login.php");
                
            }


        }catch(Exception $e){
            die (" Error: " . $e->getMessage());
        }


    ?>


</body>
</html>