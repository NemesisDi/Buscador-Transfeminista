
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buscador</title>
</head>
<body>


    
    <form action="index.php" method="POST" autocomplete="off" id="form.search">
    <h1>Buscador</h1>
        <input  type="text" name="buscar" placeholder="Ingresa una busqueda"> <br>
        <input type="submit" name="enviar" value="Buscar">

    </form>

    <br>

    <table>
        <thead>
            <th>Nombre</th>
            <th>Escritos</th>
        </thead>

        <tbody>
    <?php

    include 'read.php';

    while ($row= mysqli_fetch_array($sql_query)){?>

        <tr>
            <td><?= $row['NOMBRE']      ?></td>
            <td><?= $row['ESCRITOS']      ?></td>
        </tr>


    <?php }


    ?>






        </tbody>

    </table>




















    <?php
    if(isset($_GET['enviar'])){
        $busqueda = $_GET['busqueda'];
        $consulta = $conn->query("SELECT * FROM autores WHERE nombre LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
        //    echo $row['nombre'].'<br>';
        }
    }
    
    
    ?>



</body>
</html>