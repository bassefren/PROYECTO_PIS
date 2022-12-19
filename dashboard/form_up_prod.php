<?php
session_start();
$usuario=$_SESSION['usuarios'];
if(!isset($usuario))
{
    header("location: ../login/login.html");
}
?>
<?php
require("../conexion/conex_us.php");
$cod_prod= $_REQUEST['id'];
$sql="SELECT * FROM productos WHERE id_prod ='$cod_prod'";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Actualizacion de datos </title>
</head>
<body>
    <div class="container my-5">
    <h1>Actualizacion de Datos</h1>
    <form action="../conexion/up_prod.php" method="post">
        <input type="hidden" class="form-control mb-3" name="cod_prod" value="<?php echo $row['id_prod']?>">
        <input type="text" class="form-control mb-3" name="txtname" value="<?php echo $row['nombre_prod']?>">
        <input type="text" class="form-control mb-3" name="txt_desc" value="<?php echo $row['descrip_prod']?>">
        <input type="text" class="form-control mb-3" name="txtsize" value="<?php echo $row['talla_prod']?>">
        <input type="text" class="form-control mb-3" name="txtcolor" value="<?php echo $row['color_prod']?>">
        <input type="text" class="form-control mb-3" name="txtmarca" value="<?php echo $row['marca_prod']?>">
        <input type="text" class="form-control mb-3" name="txtespecie" value="<?php echo $row['especie_prod']?>">
      

        <input type="submit" class="btn btn-primary" value="Actualizar">
        <a href="tables.php"><input type="submit" class="btn btn-danger" value="Regresar"></a>

    </form>


</div>

</body>
</html>