<?php
    include "conexion.php";

    $id=htmlentities($_GET['id']);
    //forma preparada
    $del=$con->prepare("DELETE FROM inventario WHERE id='$id'");

    $del->bind_param('i',$id);

    if($del->execute()){
        header("location:index.php");
    }else{
        echo "No elimino";
    }
    
    $del->close();
    $con->close();


?>