<?php

    include 'conexion.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $producto=$_POST['producto'];
        $precio=htmlentities($_POST['precio']);
        $cantidad=$con->real_escape_string(htmlentities($_POST['cantidad']));
        $categoria=$con->real_escape_string(htmlentities($_POST['categoria']));
        $id=$_POST['id'];

        //Forma preparada
        $up=$con->prepare("UPDATE inventario SET producto = ?,precio=?,cantidad=?,categoria=? WHERE id=?");
        $up->bind_param("sdisi",$producto,$precio,$cantidad,$categoria,$id);

        if($up->execute()){
            header("location:index.php");
        }else{
            echo "No Edito";
        }
        
        $up->close();
        $con->close();

    }else{
        header("location:index.php");
    }

?>