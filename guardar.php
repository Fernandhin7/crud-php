<?php

    include 'conexion.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $producto=$_POST['producto'];
        $precio=htmlentities($_POST['precio']);
        $cantidad=$con->real_escape_string(htmlentities($_POST['cantidad']));
        $categoria=$con->real_escape_string(htmlentities($_POST['categoria']));
        $id='';

        //Forma completa
            /*$ins=$con->query("INSERT INTO inventario (id,producto,precio,cantidad,categoria) VALUES (DEFAULT,'$producto','$precio','$cantidad','$categoria')");

        //Forma corta
            /*$ins=$con->query("INSERT INTO inventario VALUES (DEFAULT,'$producto','$precio','$cantidad','$categoria')");*/
       
        //Consulta Peraprada
        $ins=$con->prepare("INSERT INTO inventario VALUES (?,?,?,?,?)");
        $ins->bind_param("isdis",$id,$producto,$precio,$cantidad,$categoria);
        if($ins->execute()){
            header("location:index.php");
        }else{
            echo "No Guardo";
        }

        $ins->close();
        $con->close();

    }else{
        header("location:index.php");
    }

?>