<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    

</body>
</html>

<?PHP 
    require('bd.php');

    $sqlquery = "SELECT * FROM productos";
    $resultado = mysqli_query($conn,$sqlquery);

    while($printar = $resultado->fetch_assoc()){
        $id = $printar["id"];
        $nombre = $printar["nombre"];
        $categoria = $printar["categoria"];
        $precio = $printar["precio"];        
      

        echo "<div>";
        echo " <form method='POST'>";
        echo "<tr> <br>";
        
        echo "<td>". $id ."   </td>";
        echo "<td>". $nombre . "   </td>";
        echo "<td>". $precio . "   </td>";
        echo "<td>". $categoria . "   </td>";
        echo "</tr>";
        echo "<button type='submit'> Actualizar</button>";
        echo "<button type='submit'> Eliminar </button>";
        echo " </form>";
        echo "</div>";
    
    }
    
    $idConsulta= "SELECT id FROM productos";
    $resultado = mysqli_query($conn,$idConsulta);
    if($id === $sqlquery){
        echo '<form>';
        echo '<input type="text" placeholder="'.$nombre.'">';
        echo '<input type="text" placeholder="'.$precio.'">';
        echo '<input type="text" placeholder="'.$categoria.'">';
        echo "<input type='submit' name='actualizar'>";

    }
    if(isset($_POST['actualizar'])){
        $idConsulta= "UPDATE productos SET nombre = $nombre , categoria = $categoria ,precio = $precio";
        $resultado = mysqli_query($conn,$idConsulta);


    }else{
        echo 'imposible printar los datos';
    }

    





?>