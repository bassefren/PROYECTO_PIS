<?php

    require("conex_us.php");
    $cod_product= $_REQUEST['id'];
    $sql= "DELETE FROM productos WHERE id_prod= '$cod_product'";
    $query=mysqli_query($conexion, $sql);

    if($query)
    {
        header("Location: ../dashboard/tables.php");
    }

?>