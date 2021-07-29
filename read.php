<?php 

include 'connect.php';

if(!isset($_POST['buscar'])){

    $_POST['buscar'] = "";
    echo "Oh, lo siento aún no está en nuestros registros";
}

$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM autores WHERE NOMBRE LIKE '%".$buscar."%'  OR ESCRITOS LIKE '%".$buscar."%'";

$sql_query = mysqli_query($conn,$SQL_READ);



?>