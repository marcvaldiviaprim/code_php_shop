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
        echo "<button type='submit'> Actualizar Producto</button>";
        echo " </form>";
        echo "</div>";
    
    }



    





?>