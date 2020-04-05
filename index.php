<?php
        include 'conexion.php';
        $sel=$con->query("SELECT id,producto,precio,cantidad,categoria FROM inventario");
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
    <nav class="navbar navbar-light bg-warning">
    <a href="#" class="navbar-brand">CRUD</a>
    </nav>
    <div class="container pt-3">
        <form action="guardar.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="producto" placeholder="Producto">
            </div>
            <div class="form-group">
                <input type="number" step="0.01" class="form-control" name="precio" placeholder="Precio">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="categoria" placeholder="Categoria">
            </div>
            <div class="form-group">
                <input type="submit" value="Guardar" class="btn btn-info">
            </div>
        </form>
    </div>
    <div class="container">
   
        <table class="table">
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <?php  while($f=$sel->fetch_assoc()){ ?>
            <tr>
                <td><?=$f['producto']?></td>
                <td><?=$f['precio']?></td>
                <td><?=$f['cantidad']?></td>
                <td><?=$f['categoria']?></td>
                <td><a href="editar.php?id=<?=$f['id']?>" class="btn btn-warning">Editar</a></td>
                <td><a href="eliminar.php?id=<?=$f['id']?>" class="btn btn-danger">Eliminar</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>