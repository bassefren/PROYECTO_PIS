<?php

    require("conex_us.php");

    $name= $_REQUEST['txtname'];
    $lastname= $_REQUEST['txtlastna'];
    $email= $_REQUEST['txtmail'];
    $nick= $_REQUEST['txtnick'];
    $pass= $_REQUEST['txtpassw'];


    $sql="INSERT INTO usuarios 
    (nombr_us, apell_us, email_us, nick_us, contra_us) 
    VALUES ('$name', '$lastname','$email', '$nick', '$pass')";
    $query = mysqli_query($conexion, $sql);

    if($query)
    {
        header("Location: ../login/login.html" );
    }else
    {
    echo "No se Ingresaron los datos";
    }
    
?>