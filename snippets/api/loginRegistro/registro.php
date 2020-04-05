<?php

    include '../conexion.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario=htmlentities($_POST['usuario']);
        $pass=htmlentities($_POST['pass']);
        $email=htmlentities($_POST['email']);
        $id='';

        $extension_img='';
        $ruta="../api/loginRegistro/foto_perfil";
        $archivo=$_FILES['foto']['tmp_name'];
        $nom_archivo=$_FILES['foto']['name'];
        $info=pathinfo($nom_archivo);
        if($archivo!=''){
            $extension_img=$info['extension'];
            if($extension_img=='png' || $extension_img=='PNG' || $extension_img=='jpg' || $extension_img=='JPG'){
                $nombreFile=$usuario.rand(0000,9999).'.'.$extension_img;
                move_uploaded_file($archivo,'foto_perfil/'.$nombreFile);
                $ruta=$ruta.'/'.$nombreFile;
            }else{
                echo "fail";
                exit();
            }
        }else{
            $ruta="../api/loginRegistro/foto_perfil/perfil.png";
        }

        $passEncriptar=password_hash($pass,PASSWORD_BCRYPT);

        $ins=$con->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?)");
        $ins->bind_param("issss",$id,$usuario,$email,$passEncriptar,$ruta);

        if($ins->execute()){
            echo "success";
        }else{
            echo "failed";
        }

    }else{
        header('location:../../index.php');
    }

?>