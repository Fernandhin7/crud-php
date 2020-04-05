<?php
        include 'conexion.php';
        $id=$con->real_escape_string(htmlentities($_GET['id']));
        $sel=$con->query("SELECT * FROM inventario WHERE id='$id'");
        if($f=$sel->fetch_assoc()){
            
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light bg-info">
    <a href="#" class="navbar-brand">CRUD</a>
    </nav>
    <div class="container pt-3">
        <form action="actualizar.php" method="post">
            <div class="form-group">
            <input type="hidden" name="id"value="<?=$f['id']?>">
                <input type="text" class="form-control" name="producto" value="<?=$f['producto']?>" placeholder="Producto">
            </div>
            <div class="form-group">
                <input type="number" step="0.01" class="form-control" value="<?=$f['precio']?>" name="precio" placeholder="Precio">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="cantidad" value="<?=$f['cantidad']?>" placeholder="Cantidad">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="categoria" value="<?=$f['categoria']?>" placeholder="Categoria">
            </div>
            <div class="form-group">
                <input type="submit" value="Editar" class="btn btn-info">
            </div>
        </form>
    </div>
</body>
</html>