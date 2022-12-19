<?php

include("conex_us.php");

$id_producto= $_REQUEST['cod_prod'];

$name_product= $_REQUEST['txtname'];
$descrip_produ= $_REQUEST['txt_desc'];
$size_Prod= $_REQUEST['txtsize'];
$color_produc= $_REQUEST['txtcolor'];
$marka_prod= $_REQUEST['txtmarca'];
$natur_prod= $_REQUEST['txtespecie'];

$sql = "UPDATE productos SET 

nombre_prod = '$name_product',
descrip_prod = '$descrip_produ',
talla_prod = '$size_Prod',
color_prod = '$color_produc',
marca_prod = '$marka_prod',
especie_prod = '$natur_prod' 

WHERE id_prod = '$id_producto'";
$query=mysqli_query($conexion,$sql);
if($query)
{
    header ("Location: ../dashboard/tables.php");
}
?>