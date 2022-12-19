<!-- Conexion Login -->
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbnombre="credencial";
$conexion=mysqli_connect($dbhost, $dbuser, $dbpass, $dbnombre);
if(!$conexion)
{
    die("No hay conexion: ".mysqli_connect_error());
}
?>