<?php

    include("conex_us.php");

    $name_prod= $_REQUEST['txtname'];
    $descrip_produc= $_REQUEST['txtdesc'];
    $size_prod= $_REQUEST['txttalla'];
    $colo_prod= $_REQUEST['txtcolor'];
    $mark_prod= $_REQUEST['txtmarca'];
    $speci_prod= $_REQUEST['txtnatu'];


    $sql="INSERT INTO productos 
    (nombre_prod, descrip_prod, talla_prod, color_prod, marca_prod, especie_prod) 
    VALUES 
    ('$name_prod','$descrip_produc','$size_prod', '$colo_prod', '$mark_prod', '$speci_prod')";
    $query = mysqli_query($conexion, $sql);

    if($query)
    {
        header("Location: ../dashboard/tables.php");
    }else
    {
    echo "No se Ingresaron los datos";
    }
?>