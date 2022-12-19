<?php
include("conex_us.php");
session_start();

$user = $_REQUEST["txtnick_user"];
$password = $_REQUEST["txtpass_user"];
$_SESSION['usuarios'] = $user;

$sql="SELECT * FROM usuarios WHERE nick_us ='".$user."' and contra_us ='".$password."'";
$query = mysqli_query($conexion, $sql);
$num = mysqli_fetch_array($query);

if($num['tipo_us']==1)
{
    header("Location: ../dashboard/admin.php");
}
 else if($num['tipo_us']==2)
 {
     header("Location: cliente.php");
 }
 else if($num['tipo_usuario'] == null || $num['tipo_usuario'] == '' )
 {
     header("Location: ../login/login.html" );
}
else if($num['tipo_usuario'] != 'tipo_usuario')
 {
     header("Location: ../login/login.html" );
}
?>